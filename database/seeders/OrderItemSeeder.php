<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    public function run(): void
    {
        $orderItems = [
            // Order 1 - June 2024
            ['order_id' => 1, 'product_id' => 1, 'quantity' => 1, 'unit_price' => 999.99],
            ['order_id' => 1, 'product_id' => 9, 'quantity' => 1, 'unit_price' => 19.99],

            // Order 2
            ['order_id' => 2, 'product_id' => 2, 'quantity' => 1, 'unit_price' => 699.99],

            // Order 3
            ['order_id' => 3, 'product_id' => 4, 'quantity' => 1, 'unit_price' => 149.99],

            // Order 4
            ['order_id' => 4, 'product_id' => 12, 'quantity' => 1, 'unit_price' => 89.99],

            // Order 5
            ['order_id' => 5, 'product_id' => 9, 'quantity' => 2, 'unit_price' => 19.99],
            ['order_id' => 5, 'product_id' => 10, 'quantity' => 1, 'unit_price' => 49.99],
            ['order_id' => 5, 'product_id' => 15, 'quantity' => 1, 'unit_price' => 39.99],
            ['order_id' => 5, 'product_id' => 16, 'quantity' => 2, 'unit_price' => 14.99],
            ['order_id' => 5, 'product_id' => 28, 'quantity' => 2, 'unit_price' => 29.99],

            // Order 6 - July 2024
            ['order_id' => 6, 'product_id' => 3, 'quantity' => 1, 'unit_price' => 449.99],

            // Order 7
            ['order_id' => 7, 'product_id' => 11, 'quantity' => 1, 'unit_price' => 39.99],
            ['order_id' => 7, 'product_id' => 13, 'quantity' => 2, 'unit_price' => 44.99],

            // Order 8
            ['order_id' => 8, 'product_id' => 8, 'quantity' => 1, 'unit_price' => 349.99],
            ['order_id' => 8, 'product_id' => 30, 'quantity' => 1, 'unit_price' => 19.99],
            ['order_id' => 8, 'product_id' => 40, 'quantity' => 1, 'unit_price' => 9.99],

            // Order 9
            ['order_id' => 9, 'product_id' => 24, 'quantity' => 1, 'unit_price' => 199.99],

            // Order 10
            ['order_id' => 10, 'product_id' => 25, 'quantity' => 1, 'unit_price' => 24.99],
            ['order_id' => 10, 'product_id' => 31, 'quantity' => 1, 'unit_price' => 12.99],
            ['order_id' => 10, 'product_id' => 32, 'quantity' => 2, 'unit_price' => 24.99],

            // Order 11 - August 2024
            ['order_id' => 11, 'product_id' => 5, 'quantity' => 1, 'unit_price' => 299.99],

            // Order 12
            ['order_id' => 12, 'product_id' => 20, 'quantity' => 1, 'unit_price' => 79.99],

            // Order 13
            ['order_id' => 13, 'product_id' => 1, 'quantity' => 1, 'unit_price' => 999.99],
            ['order_id' => 13, 'product_id' => 10, 'quantity' => 1, 'unit_price' => 49.99],

            // Order 14
            ['order_id' => 14, 'product_id' => 4, 'quantity' => 1, 'unit_price' => 149.99],
            ['order_id' => 14, 'product_id' => 9, 'quantity' => 1, 'unit_price' => 19.99],

            // Order 15
            ['order_id' => 15, 'product_id' => 3, 'quantity' => 1, 'unit_price' => 449.99],

            // Order 16 - September 2024
            ['order_id' => 16, 'product_id' => 1, 'quantity' => 1, 'unit_price' => 999.99],

            // Order 17
            ['order_id' => 17, 'product_id' => 6, 'quantity' => 1, 'unit_price' => 29.99],
            ['order_id' => 17, 'product_id' => 7, 'quantity' => 1, 'unit_price' => 79.99],
            ['order_id' => 17, 'product_id' => 6, 'quantity' => 1, 'unit_price' => 29.99],

            // Order 18
            ['order_id' => 18, 'product_id' => 9, 'quantity' => 3, 'unit_price' => 19.99],
            ['order_id' => 18, 'product_id' => 15, 'quantity' => 1, 'unit_price' => 39.99],
            ['order_id' => 18, 'product_id' => 16, 'quantity' => 3, 'unit_price' => 14.99],
            ['order_id' => 18, 'product_id' => 40, 'quantity' => 2, 'unit_price' => 9.99],
            ['order_id' => 18, 'product_id' => 41, 'quantity' => 3, 'unit_price' => 14.99],
            ['order_id' => 18, 'product_id' => 31, 'quantity' => 2, 'unit_price' => 12.99],

            // Order 19
            ['order_id' => 19, 'product_id' => 12, 'quantity' => 1, 'unit_price' => 89.99],

            // Order 20
            ['order_id' => 20, 'product_id' => 8, 'quantity' => 1, 'unit_price' => 349.99],

            // Order 21 - October 2024
            ['order_id' => 21, 'product_id' => 11, 'quantity' => 2, 'unit_price' => 39.99],
            ['order_id' => 21, 'product_id' => 13, 'quantity' => 3, 'unit_price' => 44.99],

            // Order 22
            ['order_id' => 22, 'product_id' => 2, 'quantity' => 1, 'unit_price' => 699.99],

            // Order 23
            ['order_id' => 23, 'product_id' => 13, 'quantity' => 1, 'unit_price' => 129.99],

            // Order 24
            ['order_id' => 24, 'product_id' => 3, 'quantity' => 1, 'unit_price' => 449.99],

            // Order 25
            ['order_id' => 25, 'product_id' => 25, 'quantity' => 2, 'unit_price' => 24.99],
            ['order_id' => 25, 'product_id' => 26, 'quantity' => 1, 'unit_price' => 89.99],
            ['order_id' => 25, 'product_id' => 9, 'quantity' => 2, 'unit_price' => 19.99],

            // Order 26 - November 2024
            ['order_id' => 26, 'product_id' => 1, 'quantity' => 1, 'unit_price' => 999.99],

            // Order 27
            ['order_id' => 27, 'product_id' => 5, 'quantity' => 1, 'unit_price' => 299.99],

            // Order 28
            ['order_id' => 28, 'product_id' => 4, 'quantity' => 1, 'unit_price' => 149.99],

            // Order 29
            ['order_id' => 29, 'product_id' => 12, 'quantity' => 1, 'unit_price' => 89.99],

            // Order 30
            ['order_id' => 30, 'product_id' => 10, 'quantity' => 2, 'unit_price' => 49.99],
            ['order_id' => 30, 'product_id' => 9, 'quantity' => 3, 'unit_price' => 19.99],
            ['order_id' => 30, 'product_id' => 17, 'quantity' => 2, 'unit_price' => 24.99],
            ['order_id' => 30, 'product_id' => 29, 'quantity' => 1, 'unit_price' => 34.99],
            ['order_id' => 30, 'product_id' => 41, 'quantity' => 3, 'unit_price' => 14.99],

            // Order 31 - December 2024
            ['order_id' => 31, 'product_id' => 2, 'quantity' => 1, 'unit_price' => 699.99],

            // Order 32
            ['order_id' => 32, 'product_id' => 8, 'quantity' => 1, 'unit_price' => 349.99],
            ['order_id' => 32, 'product_id' => 6, 'quantity' => 1, 'unit_price' => 29.99],

            // Order 33
            ['order_id' => 33, 'product_id' => 24, 'quantity' => 1, 'unit_price' => 199.99],

            // Order 34
            ['order_id' => 34, 'product_id' => 3, 'quantity' => 1, 'unit_price' => 449.99],

            // Order 35
            ['order_id' => 35, 'product_id' => 11, 'quantity' => 1, 'unit_price' => 39.99],
            ['order_id' => 35, 'product_id' => 13, 'quantity' => 1, 'unit_price' => 44.99],
            ['order_id' => 35, 'product_id' => 15, 'quantity' => 1, 'unit_price' => 39.99],
            ['order_id' => 35, 'product_id' => 26, 'quantity' => 1, 'unit_price' => 89.99],
            ['order_id' => 35, 'product_id' => 29, 'quantity' => 1, 'unit_price' => 34.99],

            // Order 36 - January 2025
            ['order_id' => 36, 'product_id' => 1, 'quantity' => 1, 'unit_price' => 999.99],

            // Order 37
            ['order_id' => 37, 'product_id' => 4, 'quantity' => 1, 'unit_price' => 149.99],

            // Order 38
            ['order_id' => 38, 'product_id' => 5, 'quantity' => 1, 'unit_price' => 299.99],

            // Order 39
            ['order_id' => 39, 'product_id' => 7, 'quantity' => 1, 'unit_price' => 79.99],
            ['order_id' => 39, 'product_id' => 10, 'quantity' => 2, 'unit_price' => 49.99],

            // Order 40
            ['order_id' => 40, 'product_id' => 12, 'quantity' => 1, 'unit_price' => 89.99],

            // Order 41 - February 2025
            ['order_id' => 41, 'product_id' => 3, 'quantity' => 1, 'unit_price' => 449.99],

            // Order 42
            ['order_id' => 42, 'product_id' => 2, 'quantity' => 1, 'unit_price' => 699.99],

            // Order 43
            ['order_id' => 43, 'product_id' => 9, 'quantity' => 2, 'unit_price' => 19.99],
            ['order_id' => 43, 'product_id' => 25, 'quantity' => 1, 'unit_price' => 24.99],
            ['order_id' => 43, 'product_id' => 28, 'quantity' => 1, 'unit_price' => 29.99],
            ['order_id' => 43, 'product_id' => 13, 'quantity' => 1, 'unit_price' => 44.99],
            ['order_id' => 43, 'product_id' => 17, 'quantity' => 2, 'unit_price' => 24.99],
            ['order_id' => 43, 'product_id' => 31, 'quantity' => 1, 'unit_price' => 12.99],

            // Order 44
            ['order_id' => 44, 'product_id' => 13, 'quantity' => 1, 'unit_price' => 129.99],

            // Order 45
            ['order_id' => 45, 'product_id' => 8, 'quantity' => 1, 'unit_price' => 349.99],

            // Order 46 - March 2025
            ['order_id' => 46, 'product_id' => 1, 'quantity' => 1, 'unit_price' => 999.99],

            // Order 47
            ['order_id' => 47, 'product_id' => 5, 'quantity' => 1, 'unit_price' => 299.99],

            // Order 48
            ['order_id' => 48, 'product_id' => 4, 'quantity' => 1, 'unit_price' => 149.99],

            // Order 49
            ['order_id' => 49, 'product_id' => 3, 'quantity' => 1, 'unit_price' => 449.99],

            // Order 50
            ['order_id' => 50, 'product_id' => 11, 'quantity' => 1, 'unit_price' => 39.99],
            ['order_id' => 50, 'product_id' => 10, 'quantity' => 1, 'unit_price' => 49.99],
            ['order_id' => 50, 'product_id' => 16, 'quantity' => 2, 'unit_price' => 14.99],
            ['order_id' => 50, 'product_id' => 17, 'quantity' => 1, 'unit_price' => 24.99],
            ['order_id' => 50, 'product_id' => 40, 'quantity' => 2, 'unit_price' => 9.99],
            ['order_id' => 50, 'product_id' => 31, 'quantity' => 2, 'unit_price' => 12.99],

            // Order 51 - April 2025
            ['order_id' => 51, 'product_id' => 2, 'quantity' => 1, 'unit_price' => 699.99],

            // Order 52
            ['order_id' => 52, 'product_id' => 8, 'quantity' => 1, 'unit_price' => 349.99],
            ['order_id' => 52, 'product_id' => 6, 'quantity' => 1, 'unit_price' => 29.99],

            // Order 53
            ['order_id' => 53, 'product_id' => 24, 'quantity' => 1, 'unit_price' => 349.99],

            // Order 54
            ['order_id' => 54, 'product_id' => 12, 'quantity' => 1, 'unit_price' => 89.99],

            // Order 55
            ['order_id' => 55, 'product_id' => 1, 'quantity' => 1, 'unit_price' => 999.99],
            ['order_id' => 55, 'product_id' => 10, 'quantity' => 1, 'unit_price' => 49.99],

            // Order 56 - May 2025
            ['order_id' => 56, 'product_id' => 1, 'quantity' => 1, 'unit_price' => 999.99],

            // Order 57
            ['order_id' => 57, 'product_id' => 5, 'quantity' => 1, 'unit_price' => 299.99],

            // Order 58
            ['order_id' => 58, 'product_id' => 4, 'quantity' => 1, 'unit_price' => 149.99],

            // Order 59
            ['order_id' => 59, 'product_id' => 3, 'quantity' => 1, 'unit_price' => 449.99],

            // Order 60
            ['order_id' => 60, 'product_id' => 9, 'quantity' => 3, 'unit_price' => 19.99],
            ['order_id' => 60, 'product_id' => 10, 'quantity' => 2, 'unit_price' => 49.99],
            ['order_id' => 60, 'product_id' => 15, 'quantity' => 1, 'unit_price' => 39.99],
            ['order_id' => 60, 'product_id' => 25, 'quantity' => 1, 'unit_price' => 24.99],
            ['order_id' => 60, 'product_id' => 31, 'quantity' => 1, 'unit_price' => 12.99],

            // Order 61 - June 2025
            ['order_id' => 61, 'product_id' => 2, 'quantity' => 1, 'unit_price' => 699.99],

            // Order 62
            ['order_id' => 62, 'product_id' => 8, 'quantity' => 1, 'unit_price' => 349.99],

            // Order 63
            ['order_id' => 63, 'product_id' => 7, 'quantity' => 1, 'unit_price' => 79.99],
            ['order_id' => 63, 'product_id' => 6, 'quantity' => 1, 'unit_price' => 29.99],
            ['order_id' => 63, 'product_id' => 11, 'quantity' => 2, 'unit_price' => 39.99],

            // Order 64
            ['order_id' => 64, 'product_id' => 3, 'quantity' => 1, 'unit_price' => 449.99],

            // Order 65
            ['order_id' => 65, 'product_id' => 13, 'quantity' => 1, 'unit_price' => 129.99],

            // Order 66 - July 2025
            ['order_id' => 66, 'product_id' => 1, 'quantity' => 1, 'unit_price' => 999.99],

            // Order 67
            ['order_id' => 67, 'product_id' => 5, 'quantity' => 1, 'unit_price' => 299.99],

            // Order 68
            ['order_id' => 68, 'product_id' => 4, 'quantity' => 1, 'unit_price' => 149.99],

            // Order 69
            ['order_id' => 69, 'product_id' => 12, 'quantity' => 1, 'unit_price' => 89.99],

            // Order 70
            ['order_id' => 70, 'product_id' => 1, 'quantity' => 1, 'unit_price' => 999.99],
            ['order_id' => 70, 'product_id' => 10, 'quantity' => 1, 'unit_price' => 49.99],

            // Order 71 - August 2025
            ['order_id' => 71, 'product_id' => 2, 'quantity' => 1, 'unit_price' => 699.99],

            // Order 72
            ['order_id' => 72, 'product_id' => 3, 'quantity' => 1, 'unit_price' => 449.99],

            // Order 73
            ['order_id' => 73, 'product_id' => 7, 'quantity' => 1, 'unit_price' => 79.99],
            ['order_id' => 73, 'product_id' => 20, 'quantity' => 1, 'unit_price' => 79.99],
            ['order_id' => 73, 'product_id' => 9, 'quantity' => 2, 'unit_price' => 19.99],

            // Order 74
            ['order_id' => 74, 'product_id' => 8, 'quantity' => 1, 'unit_price' => 349.99],

            // Order 75
            ['order_id' => 75, 'product_id' => 13, 'quantity' => 1, 'unit_price' => 129.99],

            // Order 76 - September 2025
            ['order_id' => 76, 'product_id' => 1, 'quantity' => 1, 'unit_price' => 999.99],

            // Order 77
            ['order_id' => 77, 'product_id' => 5, 'quantity' => 1, 'unit_price' => 299.99],

            // Order 78
            ['order_id' => 78, 'product_id' => 3, 'quantity' => 1, 'unit_price' => 449.99],

            // Order 79
            ['order_id' => 79, 'product_id' => 7, 'quantity' => 1, 'unit_price' => 79.99],
            ['order_id' => 79, 'product_id' => 10, 'quantity' => 2, 'unit_price' => 49.99],

            // Order 80
            ['order_id' => 80, 'product_id' => 12, 'quantity' => 1, 'unit_price' => 89.99],

            // Order 81 - October 2025
            ['order_id' => 81, 'product_id' => 2, 'quantity' => 1, 'unit_price' => 699.99],

            // Order 82
            ['order_id' => 82, 'product_id' => 8, 'quantity' => 1, 'unit_price' => 349.99],

            // Order 83
            ['order_id' => 83, 'product_id' => 3, 'quantity' => 1, 'unit_price' => 449.99],

            // Order 84
            ['order_id' => 84, 'product_id' => 9, 'quantity' => 2, 'unit_price' => 19.99],
            ['order_id' => 84, 'product_id' => 20, 'quantity' => 1, 'unit_price' => 79.99],
            ['order_id' => 84, 'product_id' => 10, 'quantity' => 2, 'unit_price' => 49.99],

            // Order 85
            ['order_id' => 85, 'product_id' => 13, 'quantity' => 1, 'unit_price' => 129.99],

            // Order 86 - November 2025
            ['order_id' => 86, 'product_id' => 1, 'quantity' => 1, 'unit_price' => 999.99],

            // Order 87
            ['order_id' => 87, 'product_id' => 5, 'quantity' => 1, 'unit_price' => 299.99],

            // Order 88
            ['order_id' => 88, 'product_id' => 3, 'quantity' => 1, 'unit_price' => 449.99],

            // Order 89
            ['order_id' => 89, 'product_id' => 7, 'quantity' => 1, 'unit_price' => 79.99],
            ['order_id' => 89, 'product_id' => 6, 'quantity' => 1, 'unit_price' => 29.99],
            ['order_id' => 89, 'product_id' => 11, 'quantity' => 2, 'unit_price' => 39.99],

            // Order 90
            ['order_id' => 90, 'product_id' => 12, 'quantity' => 1, 'unit_price' => 89.99],
        ];

        foreach ($orderItems as $item) {
            OrderItem::create($item);
        }
    }
}
