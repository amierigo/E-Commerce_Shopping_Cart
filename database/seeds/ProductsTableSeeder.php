<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('products') -> insert([
       	'product_name' => "Polo Shirt",
       	'product_price' => '100',
       	'product_image' => '1.jpg',
        'description' => 'Free Size',
       	'created_at' => date("Y-m-d H:i:s"),
       	'updated_at' => date("Y-m-d H:i:s"),
       ]);
       DB::table('products') -> insert([
        'product_name' => "Summer Deluxe",
        'product_price' => '200',
        'product_image' => '2.jpg',
        'description' => 'Be on it',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
       ]);
       DB::table('products') -> insert([
        'product_name' => "Sweater",
        'product_price' => '300',
        'product_image' => 'a2.jpg',
        'description' => 'Suweg!',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
       ]);
       DB::table('products') -> insert([
        'product_name' => "Jacket",
        'product_price' => '450',
        'product_image' => 'a11.jpg',
        'description' => 'Cold You',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
       ]);
       DB::table('products') -> insert([
        'product_name' => "Speaker",
        'product_price' => '1000',
        'product_image' => 'e5.jpg',
        'description' => 'High Quality',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
       ]);
       DB::table('products') -> insert([
        'product_name' => "Beat Headset",
        'product_price' => '2000',
        'product_image' => 'e6.jpg',
        'description' => 'high Quality',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
       ]);
       DB::table('products') -> insert([
        'product_name' => "Power Bank",
        'product_price' => '2000',
        'product_image' => 'e7.jpg',
        'description' => '60000 mHA',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
       ]);
       DB::table('products') -> insert([
        'product_name' => "Bluetooth Earphone",
        'product_price' => '500',
        'product_image' => 'e8.jpg',
        'description' => '100 meters',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
       ]);

       DB::table('products') -> insert([
        'product_name' => "Overall",
        'product_price' => '1000',
        'product_image' => 'baby3.jpg',
        'description' => 'Red',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
       ]);
       DB::table('products') -> insert([
        'product_name' => "Sweet baby",
        'product_price' => '2000',
        'product_image' => 'baby4.jpg',
        'description' => 'sweet',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
       ]);
       DB::table('products') -> insert([
        'product_name' => "Jumper",
        'product_price' => '2000',
        'product_image' => 'baby2.jpg',
        'description' => 'Boy Blue',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
       ]);
       DB::table('products') -> insert([
        'product_name' => "Month old wear",
        'product_price' => '500',
        'product_image' => 'baby9.jpg',
        'description' => 'Cotton',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
       ]);

       DB::table('products') -> insert([
        'product_name' => "Closet",
        'product_price' => '800',
        'product_image' => 'clothes.jpg',
        'description' => 'High Quality',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
       ]);
       DB::table('products') -> insert([
        'product_name' => "Double Deck",
        'product_price' => '10000',
        'product_image' => 'doubledeck.jpg',
        'description' => 'high Quality',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
       ]);
       DB::table('products') -> insert([
        'product_name' => "Bench",
        'product_price' => '2000',
        'product_image' => 'bench.jpg',
        'description' => 'Holy wood',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
       ]);
       DB::table('products') -> insert([
        'product_name' => "Drawer",
        'product_price' => '500',
        'product_image' => 'wood.jpg',
        'description' => 'Wooden drawer',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
       ]);
  }
}
