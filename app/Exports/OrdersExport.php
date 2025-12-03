<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class OrdersExport implements FromCollection, WithHeadings, WithMapping, WithTitle, WithCustomStartCell, WithEvents
{
    protected $startDate;
    protected $endDate;
    protected $orderItems;
    protected $totalOrders;
    protected $totalRevenue;
    protected $topProducts;
    protected $averageOrderValue;

    public function __construct($startDate, $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->calculateSummary();
    }

    protected function calculateSummary()
    {
        $orders = Order::with(['customer', 'orderItems.product.category'])
            ->whereBetween('order_date', [$this->startDate, $this->endDate])
            ->get();

        // Get all order items
        $this->orderItems = $orders->flatMap(function($order) {
            return $order->orderItems;
        });

        // Calculate metrics
        $this->totalOrders = $this->orderItems->count();
        $this->totalRevenue = $this->orderItems->sum(function($item) {
            return $item->quantity * $item->unit_price;
        });
        $this->averageOrderValue = $this->totalOrders > 0 ? $this->totalRevenue / $this->totalOrders : 0;

        // Get top 3 products
        $topProducts = $this->orderItems
            ->groupBy('product_id')
            ->map(function($items) {
                return [
                    'name' => $items->first()->product->name,
                    'total_quantity' => $items->sum('quantity')
                ];
            })
            ->sortByDesc('total_quantity')
            ->values();

        if ($topProducts->isNotEmpty()) {
            $maxQuantity = $topProducts->first()['total_quantity'];
            $topQuantityProducts = $topProducts->filter(function($product) use ($maxQuantity) {
                return $product['total_quantity'] == $maxQuantity;
            });

            if ($topQuantityProducts->count() > 3) {
                $this->topProducts = $topQuantityProducts->take(3)->pluck('name')->join(', ');
            } else {
                $this->topProducts = $topQuantityProducts->pluck('name')->join(', ');
            }
        } else {
            $this->topProducts = '-';
        }
    }

    public function collection()
    {
        return $this->orderItems;
    }

    public function startCell(): string
    {
        return 'A10'; // Start detailed table at row 10 (after summary)
    }

    public function headings(): array
    {
        return [
            'Order Date',
            'Customer',
            'State',
            'Category',
            'Product',
            'Quantity',
            'Unit Price (RM)',
            'Subtotal (RM)'
        ];
    }

    public function map($orderItem): array
    {
        return [
            $orderItem->order->order_date->format('Y-m-d'),
            $orderItem->order->customer->name,
            $orderItem->order->customer->state,
            $orderItem->product->category->name,
            $orderItem->product->name,
            $orderItem->quantity,
            number_format($orderItem->unit_price, 2),
            number_format($orderItem->quantity * $orderItem->unit_price, 2)
        ];
    }

    public function title(): string
    {
        return 'Orders Report';
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();

                // Add title
                $sheet->setCellValue('A1', 'Product Order Summary Report');
                $sheet->mergeCells('A1:H1');
                $sheet->getStyle('A1')->applyFromArray([
                    'font' => ['bold' => true, 'size' => 16],
                    'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER]
                ]);

                // Add summary section header
                $sheet->setCellValue('A3', 'A. Summary Section');
                $sheet->mergeCells('A3:H3');
                $sheet->getStyle('A3')->applyFromArray([
                    'font' => ['bold' => true, 'size' => 12],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'startColor' => ['rgb' => 'E7E6E6']
                    ]
                ]);

                // Summary data
                $sheet->setCellValue('A4', 'Metric');
                $sheet->setCellValue('B4', 'Value');
                $sheet->getStyle('A4:B4')->applyFromArray([
                    'font' => ['bold' => true],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'startColor' => ['rgb' => 'D9D9D9']
                    ],
                    'borders' => [
                        'allBorders' => ['borderStyle' => Border::BORDER_THIN]
                    ]
                ]);

                $sheet->setCellValue('A5', 'Total Orders');
                $sheet->setCellValue('B5', $this->totalOrders);
                $sheet->setCellValue('A6', 'Total Revenue');
                $sheet->setCellValue('B6', 'RM ' . number_format($this->totalRevenue, 2));
                $sheet->setCellValue('A7', 'Top 3 Products');
                $sheet->setCellValue('B7', $this->topProducts);
                $sheet->setCellValue('A8', 'Average Order Value');
                $sheet->setCellValue('B8', 'RM ' . number_format($this->averageOrderValue, 2));
                $sheet->getStyle('A5:B8')->applyFromArray([
                    'borders' => [
                        'allBorders' => ['borderStyle' => Border::BORDER_THIN]
                    ]
                ]);

                // Add spacing before detailed table
                $sheet->insertNewRowBefore(9,1);
                $sheet->getStyle('A9:B9')->applyFromArray([
                    'borders' => [
                        'allBorders' => ['borderStyle' => Border::BORDER_NONE]
                    ]
                ]);

                // Add detailed table header
                $sheet->setCellValue('A10', 'B. Detailed Table');
                $sheet->mergeCells('A10:H10');
                $sheet->getStyle('A10')->applyFromArray([
                    'font' => ['bold' => true, 'size' => 12],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'startColor' => ['rgb' => 'E7E6E6']
                    ],
                ]);

                $lastRow = $sheet->getHighestRow();

                // Style row 11 with blue background and white bold font
                $sheet->getStyle('A11:H11')->applyFromArray([
                    'font' => ['bold' => true, 'size' => 11],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'startColor' => ['rgb' => '4472C4']
                    ],
                    'font' => ['color' => ['rgb' => 'FFFFFF'], 'bold' => true],
                    'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER]
                ]);

                // Apply borders to detailed table until last row
                $sheet->getStyle('A11:H' . $lastRow)->applyFromArray([
                    'borders' => [
                        'allBorders' => ['borderStyle' => Border::BORDER_THIN]
                    ]
                ]);

                // Auto-size columns
                foreach (range('A', 'H') as $col) {
                    $sheet->getColumnDimension($col)->setAutoSize(true);
                }
            },
        ];
    }
}
