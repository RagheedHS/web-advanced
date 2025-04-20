<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InitialDataSeeder extends Seeder
{
    public function run()
    {
        // Clear tables first (optional)
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::table('brands')->truncate();
        DB::table('categories')->truncate();
        DB::table('products')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Users
        DB::table('users')->insert([
            [
                'id' => 6,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$12$e1rvvES8HPBeUUQom7u1QOfbtDe/Xv8bCYfso0d/zjhz2hmJ2eCAi',
                'Utype' => 'ADM',
                'created_at' => '2025-04-19 12:13:13',
                'updated_at' => '2025-04-19 12:13:13'
            ],
            [
                'id' => 7,
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => '$2y$12$XLhd6aLEVa8fA/3UTSvyceD9dekEGp7ZDBLJtpcUG3OroTbkWiWOm',
                'Utype' => 'USR',
                'created_at' => '2025-04-19 12:14:13',
                'updated_at' => '2025-04-19 12:14:13'
            ]
        ]);

        // Brands
        DB::table('brands')->insert([
            [
                'id' => 6,
                'name' => 'louis vuitton',
                'slug' => 'louis-vuitton',
                'image' => '1745059760.png',
                'created_at' => '2025-04-19 07:49:23',
                'updated_at' => '2025-04-19 07:49:23'
            ],
            [
                'id' => 7,
                'name' => 'zara',
                'slug' => 'zara',
                'image' => '1745059795.png',
                'created_at' => '2025-04-19 07:49:55',
                'updated_at' => '2025-04-19 07:49:55'
            ],
            [
                'id' => 8,
                'name' => 'essentials',
                'slug' => 'essentials',
                'image' => '1745059827.png',
                'created_at' => '2025-04-19 07:50:27',
                'updated_at' => '2025-04-19 07:50:27'
            ]
        ]);

        // Categories - Added missing categories that products reference
        DB::table('categories')->insert([
            [
                'id' => 3,
                'name' => 'men jeans',
                'slug' => 'men-jeans',
                'image' => '1743427606.png',
                'parent_id' => null,
                'created_at' => '2025-03-31 10:26:50',
                'updated_at' => '2025-03-31 10:26:50'
            ],
            [
                'id' => 4,  // Added this category which products reference
                'name' => 'jackets',
                'slug' => 'jackets',
                'image' => '1743428130.png',
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,  // Added this category which products reference
                'name' => 'dresses',
                'slug' => 'dresses',
                'image' => '1743427986.png',
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 8,  // Added this category which products reference
                'name' => 'T-shirt',
                'slug' => 'T-shirt',
                'image' => '1743427713.png',
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 10,
                'name' => 'women clothes',
                'slug' => 'women-clothes',
                'image' => '1743428130.png',
                'parent_id' => null,
                'created_at' => '2025-03-31 10:35:30',
                'updated_at' => '2025-03-31 10:35:30'
            ]
        ]);

        // Products - Updated some to be featured so they appear on homepage
        DB::table('products')->insert([
            [
                'id' => 12,
                'name' => 'lv dress',
                'slug' => 'lv-dress',
                'short_description' => 'Effortlessly blending sophistication with modern flair...',
                'description' => 'This Louis Vuitton dress is a true embodiment of timeless elegance...',
                'regular_price' => 2000.00,
                'sale_price' => 1500.00,
                'SKU' => 'skt1001',
                'stock_status' => 'instock',
                'featured' => 1,  // Changed to featured
                'quantity' => 5,
                'image' => '1745060181.jpg',
                'images' => '',
                'category_id' => 6,  // Now valid category
                'brand_id' => 6,
                'created_at' => '2025-04-19 07:56:21',
                'updated_at' => '2025-04-19 07:56:21'
            ],
            [
                'id' => 13,
                'name' => 'red jacket',
                'slug' => 'red-jacket',
                'short_description' => 'Bold and stylish, this red jacket adds a pop of color...',
                'description' => 'Make a statement with this vibrant red jacket...',
                'regular_price' => 100.00,
                'sale_price' => 62.00,
                'SKU' => 'skt1001',
                'stock_status' => 'instock',
                'featured' => 1,  // Changed to featured
                'quantity' => 5,
                'image' => '1745060581.jpg',
                'images' => '1745060581-1.jpg',
                'category_id' => 4,  // Now valid category
                'brand_id' => 7,
                'created_at' => '2025-04-19 08:03:02',
                'updated_at' => '2025-04-19 08:03:02'
            ],
            [
                'id' => 14,
                'name' => 'black shirt',
                'slug' => 'black-shirt',
                'short_description' => 'A classic black shirt that pairs effortlessly...',
                'description' => 'This black shirt is a wardrobe essential...',
                'regular_price' => 62.00,
                'sale_price' => 28.00,
                'SKU' => 'skt1001',
                'stock_status' => 'instock',
                'featured' => 0,
                'quantity' => 11,
                'image' => '1745060679.jpg',
                'images' => '',
                'category_id' => 4,  // Now valid category
                'brand_id' => 8,
                'created_at' => '2025-04-19 08:04:39',
                'updated_at' => '2025-04-19 08:04:39'
            ],
            [
                'id' => 15,
                'name' => 'zara dress',
                'slug' => 'zara-dress',
                'short_description' => 'Chic and contemporary, this Zara dress...',
                'description' => 'This Zara dress blends modern design with timeless sophistication...',
                'regular_price' => 100.00,
                'sale_price' => 70.00,
                'SKU' => 'skt1001',
                'stock_status' => 'instock',
                'featured' => 1,  // Changed to featured
                'quantity' => 11,
                'image' => '1745060765.jpg',
                'images' => '',
                'category_id' => 6,  // Now valid category
                'brand_id' => 7,
                'created_at' => '2025-04-19 08:06:05',
                'updated_at' => '2025-04-19 08:06:05'
            ],
            [
                'id' => 16,
                'name' => 'essentials hoodie',
                'slug' => 'essentials-hoodie',
                'short_description' => 'Clean, cozy, and iconic...',
                'description' => 'The Essentials hoodie combines minimal design with maximum impact...',
                'regular_price' => 60.00,
                'sale_price' => 60.00,
                'SKU' => 'skt1001',
                'stock_status' => 'instock',
                'featured' => 0,
                'quantity' => 12,
                'image' => '1745060879.jpg',
                'images' => '1745060879-1.jpg',
                'category_id' => 4,  // Now valid category
                'brand_id' => 8,
                'created_at' => '2025-04-19 08:08:00',
                'updated_at' => '2025-04-19 08:08:00'
            ],
            [
                'id' => 17,
                'name' => 'zara top',
                'slug' => 'zara-top',
                'short_description' => 'A stylish and versatile Zara women\'s top...',
                'description' => 'This Zara women\'s top combines modern elegance...',
                'regular_price' => 28.00,
                'sale_price' => 28.00,
                'SKU' => 'skt1001',
                'stock_status' => 'instock',
                'featured' => 0,
                'quantity' => 12,
                'image' => '1745061602.jpg',
                'images' => '',
                'category_id' => 8,  // Now valid category
                'brand_id' => 7,
                'created_at' => '2025-04-19 08:20:02',
                'updated_at' => '2025-04-19 08:20:02'
            ]
      ]);
    }
}
