<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OrdersExport;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // Initialize with zero values
        $totalOrders = 0;
        $totalRevenue = 0;
        $averageOrderValue = 0;
        $topSellingProducts = '-';
        $orderItems = collect();

        // If date range is selected, fetch the data
        if ($startDate && $endDate) {
            $orders = Order::with(['customer', 'orderItems.product.category'])
                        ->whereBetween('order_date', [$startDate, $endDate])
                        ->get();

            // Get all order items from the orders
            $orderItems = $orders->flatMap(function($order) {
                return $order->orderItems;
            });

            // Calculate metrics from orders
             $totalOrders = $orderItems->count();
             $totalRevenue = $orderItems->sum(function($item) {
                return $item->quantity * $item->unit_price;
             });
             $averageOrderValue = $totalOrders > 0 ? $totalRevenue / $totalOrders : 0;

            // Get top 3 selling products
            $topProducts = $orderItems
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
                // Get the highest quantity
                $maxQuantity = $topProducts->first()['total_quantity'];

                // Get all products with the highest quantity
                $topQuantityProducts = $topProducts
                    ->filter(function($product) use ($maxQuantity) {
                        return $product['total_quantity'] == $maxQuantity;
                    });

                // If more than 3 products have the same top quantity, take only first 3
                // Otherwise show all products with the top quantity
                if ($topQuantityProducts->count() > 3) {
                    $topSellingProducts = $topQuantityProducts->take(3)->pluck('name')->join(', ');
                } else {
                    $topSellingProducts = $topQuantityProducts->pluck('name')->join(', ');
                }
            } else {
                $topSellingProducts = '-';
            }
        }

        return view('dashboard.report', compact(
            'totalOrders',
            'totalRevenue',
            'averageOrderValue',
            'topSellingProducts',
            'orderItems',
            'startDate',
            'endDate'
        ));
    }

    public function export(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        return Excel::download(new OrdersExport($startDate, $endDate), 'orders-report-'.$startDate.'-'.$endDate.'.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
