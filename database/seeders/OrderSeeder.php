<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $orders = [
            // June 2024
            ['customer_id' => 1, 'order_date' => '2024-06-05', 'total_amount' => 1019.98],
            ['customer_id' => 2, 'order_date' => '2024-06-10', 'total_amount' => 699.99],
            ['customer_id' => 3, 'order_date' => '2024-06-15', 'total_amount' => 149.97],
            ['customer_id' => 4, 'order_date' => '2024-06-20', 'total_amount' => 89.99],
            ['customer_id' => 5, 'order_date' => '2024-06-25', 'total_amount' => 234.96],

            // July 2024
            ['customer_id' => 6, 'order_date' => '2024-07-02', 'total_amount' => 449.99],
            ['customer_id' => 7, 'order_date' => '2024-07-08', 'total_amount' => 129.98],
            ['customer_id' => 8, 'order_date' => '2024-07-12', 'total_amount' => 379.97],
            ['customer_id' => 9, 'order_date' => '2024-07-18', 'total_amount' => 199.99],
            ['customer_id' => 10, 'order_date' => '2024-07-25', 'total_amount' => 89.98],

            // August 2024
            ['customer_id' => 1, 'order_date' => '2024-08-03', 'total_amount' => 299.99],
            ['customer_id' => 11, 'order_date' => '2024-08-07', 'total_amount' => 79.99],
            ['customer_id' => 12, 'order_date' => '2024-08-14', 'total_amount' => 549.98],
            ['customer_id' => 13, 'order_date' => '2024-08-20', 'total_amount' => 169.97],
            ['customer_id' => 14, 'order_date' => '2024-08-28', 'total_amount' => 449.99],

            // September 2024
            ['customer_id' => 15, 'order_date' => '2024-09-05', 'total_amount' => 999.99],
            ['customer_id' => 16, 'order_date' => '2024-09-10', 'total_amount' => 139.98],
            ['customer_id' => 17, 'order_date' => '2024-09-15', 'total_amount' => 274.96],
            ['customer_id' => 18, 'order_date' => '2024-09-22', 'total_amount' => 89.99],
            ['customer_id' => 2, 'order_date' => '2024-09-28', 'total_amount' => 349.99],

            // October 2024
            ['customer_id' => 19, 'order_date' => '2024-10-04', 'total_amount' => 219.98],
            ['customer_id' => 20, 'order_date' => '2024-10-09', 'total_amount' => 699.99],
            ['customer_id' => 3, 'order_date' => '2024-10-15', 'total_amount' => 129.99],
            ['customer_id' => 21, 'order_date' => '2024-10-21', 'total_amount' => 449.99],
            ['customer_id' => 22, 'order_date' => '2024-10-27', 'total_amount' => 179.97],

            // November 2024
            ['customer_id' => 23, 'order_date' => '2024-11-02', 'total_amount' => 999.99],
            ['customer_id' => 24, 'order_date' => '2024-11-08', 'total_amount' => 299.99],
            ['customer_id' => 4, 'order_date' => '2024-11-14', 'total_amount' => 149.98],
            ['customer_id' => 25, 'order_date' => '2024-11-20', 'total_amount' => 89.99],
            ['customer_id' => 26, 'order_date' => '2024-11-25', 'total_amount' => 524.96],

            // December 2024
            ['customer_id' => 27, 'order_date' => '2024-12-01', 'total_amount' => 699.99],
            ['customer_id' => 5, 'order_date' => '2024-12-07', 'total_amount' => 379.98],
            ['customer_id' => 28, 'order_date' => '2024-12-12', 'total_amount' => 199.99],
            ['customer_id' => 29, 'order_date' => '2024-12-18', 'total_amount' => 449.99],
            ['customer_id' => 30, 'order_date' => '2024-12-24', 'total_amount' => 259.97],

            // January 2025
            ['customer_id' => 1, 'order_date' => '2025-01-05', 'total_amount' => 999.99],
            ['customer_id' => 6, 'order_date' => '2025-01-10', 'total_amount' => 149.99],
            ['customer_id' => 31, 'order_date' => '2025-01-15', 'total_amount' => 299.99],
            ['customer_id' => 32, 'order_date' => '2025-01-20', 'total_amount' => 179.98],
            ['customer_id' => 33, 'order_date' => '2025-01-28', 'total_amount' => 89.99],

            // February 2025
            ['customer_id' => 34, 'order_date' => '2025-02-03', 'total_amount' => 449.99],
            ['customer_id' => 7, 'order_date' => '2025-02-08', 'total_amount' => 699.99],
            ['customer_id' => 35, 'order_date' => '2025-02-14', 'total_amount' => 219.97],
            ['customer_id' => 36, 'order_date' => '2025-02-19', 'total_amount' => 129.99],
            ['customer_id' => 8, 'order_date' => '2025-02-25', 'total_amount' => 349.99],

            // March 2025
            ['customer_id' => 37, 'order_date' => '2025-03-02', 'total_amount' => 999.99],
            ['customer_id' => 38, 'order_date' => '2025-03-08', 'total_amount' => 299.99],
            ['customer_id' => 9, 'order_date' => '2025-03-14', 'total_amount' => 149.98],
            ['customer_id' => 39, 'order_date' => '2025-03-20', 'total_amount' => 449.99],
            ['customer_id' => 40, 'order_date' => '2025-03-27', 'total_amount' => 189.97],

            // April 2025
            ['customer_id' => 10, 'order_date' => '2025-04-04', 'total_amount' => 699.99],
            ['customer_id' => 41, 'order_date' => '2025-04-09', 'total_amount' => 379.98],
            ['customer_id' => 42, 'order_date' => '2025-04-15', 'total_amount' => 199.99],
            ['customer_id' => 11, 'order_date' => '2025-04-21', 'total_amount' => 89.99],
            ['customer_id' => 43, 'order_date' => '2025-04-28', 'total_amount' => 549.98],

            // May 2025
            ['customer_id' => 44, 'order_date' => '2025-05-03', 'total_amount' => 999.99],
            ['customer_id' => 12, 'order_date' => '2025-05-09', 'total_amount' => 299.99],
            ['customer_id' => 45, 'order_date' => '2025-05-15', 'total_amount' => 149.99],
            ['customer_id' => 46, 'order_date' => '2025-05-22', 'total_amount' => 449.99],
            ['customer_id' => 13, 'order_date' => '2025-05-29', 'total_amount' => 279.97],

            // June 2025
            ['customer_id' => 47, 'order_date' => '2025-06-05', 'total_amount' => 699.99],
            ['customer_id' => 14, 'order_date' => '2025-06-11', 'total_amount' => 349.99],
            ['customer_id' => 48, 'order_date' => '2025-06-17', 'total_amount' => 189.98],
            ['customer_id' => 15, 'order_date' => '2025-06-23', 'total_amount' => 449.99],
            ['customer_id' => 49, 'order_date' => '2025-06-28', 'total_amount' => 129.99],

            // July 2025
            ['customer_id' => 50, 'order_date' => '2025-07-03', 'total_amount' => 999.99],
            ['customer_id' => 16, 'order_date' => '2025-07-09', 'total_amount' => 299.99],
            ['customer_id' => 17, 'order_date' => '2025-07-15', 'total_amount' => 149.99],
            ['customer_id' => 18, 'order_date' => '2025-07-21', 'total_amount' => 89.99],
            ['customer_id' => 1, 'order_date' => '2025-07-28', 'total_amount' => 549.98],

            // August 2025
            ['customer_id' => 2, 'order_date' => '2025-08-02', 'total_amount' => 699.99],
            ['customer_id' => 19, 'order_date' => '2025-08-08', 'total_amount' => 449.99],
            ['customer_id' => 3, 'order_date' => '2025-08-14', 'total_amount' => 199.98],
            ['customer_id' => 20, 'order_date' => '2025-08-20', 'total_amount' => 349.99],
            ['customer_id' => 4, 'order_date' => '2025-08-27', 'total_amount' => 129.99],

            // September 2025
            ['customer_id' => 21, 'order_date' => '2025-09-03', 'total_amount' => 999.99],
            ['customer_id' => 5, 'order_date' => '2025-09-09', 'total_amount' => 299.99],
            ['customer_id' => 22, 'order_date' => '2025-09-15', 'total_amount' => 449.99],
            ['customer_id' => 6, 'order_date' => '2025-09-21', 'total_amount' => 179.98],
            ['customer_id' => 23, 'order_date' => '2025-09-28', 'total_amount' => 89.99],

            // October 2025
            ['customer_id' => 24, 'order_date' => '2025-10-04', 'total_amount' => 699.99],
            ['customer_id' => 7, 'order_date' => '2025-10-10', 'total_amount' => 349.99],
            ['customer_id' => 25, 'order_date' => '2025-10-16', 'total_amount' => 449.99],
            ['customer_id' => 8, 'order_date' => '2025-10-22', 'total_amount' => 199.98],
            ['customer_id' => 26, 'order_date' => '2025-10-29', 'total_amount' => 129.99],

            // November 2025
            ['customer_id' => 27, 'order_date' => '2025-11-05', 'total_amount' => 999.99],
            ['customer_id' => 9, 'order_date' => '2025-11-11', 'total_amount' => 299.99],
            ['customer_id' => 28, 'order_date' => '2025-11-17', 'total_amount' => 449.99],
            ['customer_id' => 10, 'order_date' => '2025-11-23', 'total_amount' => 189.98],
            ['customer_id' => 29, 'order_date' => '2025-11-29', 'total_amount' => 89.99],
        ];

        foreach ($orders as $order) {
            Order::create($order);
        }
    }
}
