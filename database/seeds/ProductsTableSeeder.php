<?php

use Carbon\Carbon;
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
        DB::table('products')->delete();
        DB::table('products')->insert(array(
            array('category_id' => 0, 'name' => 'Nike 1', 'type' => 'shoes', 'brand' => 'Nike', 'origin' => 'American', 'price' => 200.5, 'image_link' => 'images/f-l.png', 'created_at' => Carbon::now()),
            array('category_id' => 0, 'name' => 'Nike 2', 'type' => 'shoes', 'brand' => 'Nike', 'origin' => 'American', 'price' => 150.0, 'image_link' => 'images/f-r.png', 'created_at' => Carbon::now()),
        ));
    }
}
