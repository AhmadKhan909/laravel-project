<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name' => 'Redmi 10',
            'price' => '200',
            'category' =>'mobile',
            'description' => 'A smartphone with 4gb ram and much more features.',
            'gallery' => 'https://i.gadgets360cdn.com/products/small/redmi-10-2022-240x180-1644816688.jpg?downsize=120:*',
            ],
            [
            'name' => 'Dell Inspiron 14 (5410)',
            'price' => '200',
            'category' =>'Laptop',
            'description' => 'A Laptop with 16gb ram and much more features.',
            'gallery' => 'https://i.gadgets360cdn.com/products/small/Inspiron-14-DB-240x180-1618318341.jpeg?downsize=120:*',
            ],
            [
            'name' => 'OnePlus TV 43 Y1S Pro',
            'price' => '350',
            'category' =>'Tv',
            'description' => 'A Tv with 43inch display and much more features.',
            'gallery' => 'https://i.gadgets360cdn.com/products/small/oneplus-tv-43-y1s-pro-db-240x180-1649329386.jpg?downsize=120:*',
            ],
            [
            'name' => 'Samsung Refrigerator',
            'price' => '400',
            'category' =>'Refrigerators',
            'description' => 'A refirgerator with much more features.',
            'gallery' => 'https://i.gadgets360cdn.com/products/198-l-direct-cool-single-door-4-star-refrigerator-rr21t2h2xcr-small-101900-1619767231.jpg?downsize=200:*',
            ],
            [
            'name' => 'Whirlpool Washing machine',
            'price' => '250',
            'category' =>'Washing Machine',
            'description' => 'A Washing machine with much more features.',
            'gallery' => 'https://i.gadgets360cdn.com/products/small/1-Copy-240x180-1640085949.jpg?downsize=120:*',
            ]

        ]);
    }
}