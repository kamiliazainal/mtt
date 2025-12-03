<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // Electronics
            ['name' => 'Laptop', 'category_id' => 1, 'price' => 999.99],
            ['name' => 'Smartphone', 'category_id' => 1, 'price' => 699.99],
            ['name' => 'Tablet', 'category_id' => 1, 'price' => 449.99],
            ['name' => 'Headphones', 'category_id' => 1, 'price' => 149.99],
            ['name' => 'Smart Watch', 'category_id' => 1, 'price' => 299.99],
            ['name' => 'Wireless Mouse', 'category_id' => 1, 'price' => 29.99],
            ['name' => 'Keyboard', 'category_id' => 1, 'price' => 79.99],
            ['name' => 'Monitor', 'category_id' => 1, 'price' => 349.99],

            // Clothing
            ['name' => 'T-Shirt', 'category_id' => 2, 'price' => 19.99],
            ['name' => 'Jeans', 'category_id' => 2, 'price' => 49.99],
            ['name' => 'Hoodie', 'category_id' => 2, 'price' => 39.99],
            ['name' => 'Sneakers', 'category_id' => 2, 'price' => 89.99],
            ['name' => 'Jacket', 'category_id' => 2, 'price' => 129.99],
            ['name' => 'Dress Shirt', 'category_id' => 2, 'price' => 44.99],

            // Books
            ['name' => 'Programming Book', 'category_id' => 3, 'price' => 39.99],
            ['name' => 'Fiction Novel', 'category_id' => 3, 'price' => 14.99],
            ['name' => 'Cookbook', 'category_id' => 3, 'price' => 24.99],
            ['name' => 'Business Book', 'category_id' => 3, 'price' => 29.99],

            // Home & Garden
            ['name' => 'Coffee Maker', 'category_id' => 4, 'price' => 79.99],
            ['name' => 'Blender', 'category_id' => 4, 'price' => 59.99],
            ['name' => 'Garden Tools Set', 'category_id' => 4, 'price' => 44.99],
            ['name' => 'Bed Sheets', 'category_id' => 4, 'price' => 34.99],
            ['name' => 'Vacuum Cleaner', 'category_id' => 4, 'price' => 199.99],

            // Sports & Outdoors
            ['name' => 'Yoga Mat', 'category_id' => 5, 'price' => 24.99],
            ['name' => 'Dumbbells Set', 'category_id' => 5, 'price' => 89.99],
            ['name' => 'Camping Tent', 'category_id' => 5, 'price' => 149.99],
            ['name' => 'Basketball', 'category_id' => 5, 'price' => 29.99],

            // Toys & Games
            ['name' => 'Board Game', 'category_id' => 6, 'price' => 34.99],
            ['name' => 'Action Figure', 'category_id' => 6, 'price' => 19.99],
            ['name' => 'Puzzle', 'category_id' => 6, 'price' => 14.99],

            // Health & Beauty
            ['name' => 'Shampoo', 'category_id' => 7, 'price' => 12.99],
            ['name' => 'Moisturizer', 'category_id' => 7, 'price' => 24.99],
            ['name' => 'Electric Toothbrush', 'category_id' => 7, 'price' => 49.99],

            // Automotive
            ['name' => 'Car Phone Mount', 'category_id' => 8, 'price' => 19.99],
            ['name' => 'Tire Pressure Gauge', 'category_id' => 8, 'price' => 14.99],
            ['name' => 'Car Vacuum', 'category_id' => 8, 'price' => 39.99],

            // Food & Beverage
            ['name' => 'Organic Coffee Beans', 'category_id' => 9, 'price' => 16.99],
            ['name' => 'Protein Powder', 'category_id' => 9, 'price' => 34.99],
            ['name' => 'Olive Oil', 'category_id' => 9, 'price' => 12.99],

            // Office Supplies
            ['name' => 'Notebook Pack', 'category_id' => 10, 'price' => 9.99],
            ['name' => 'Pen Set', 'category_id' => 10, 'price' => 14.99],
            ['name' => 'Desk Organizer', 'category_id' => 10, 'price' => 24.99],
            ['name' => 'Paper Shredder', 'category_id' => 10, 'price' => 79.99],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
