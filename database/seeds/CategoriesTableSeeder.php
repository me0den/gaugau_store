<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeed extends Seeder {

  public function run() {
    DB::table('categories')->delete();
    DB::table('categories')->insert(array(
      array('category_name' => 'Shop', 'parent_id' => 0, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Men', 'parent_id' => 0, 'link' => '/categories/men', 'created_at' => Carbon::now()),
      array('category_name' => 'Women', 'parent_id' => 0, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Kids', 'parent_id' => 0, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Formal', 'parent_id' => 0, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Casual', 'parent_id' => 0, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Sport', 'parent_id' => 0, 'link' => '/products', 'created_at' => Carbon::now()),
      /* Shop */
      array('category_name' => 'Shoes', 'parent_id' => 1, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Tees', 'parent_id' => 1, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Tops', 'parent_id' => 1, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Tracks', 'parent_id' => 1, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Gear', 'parent_id' => 1, 'link' => '/products', 'created_at' => Carbon::now()),
      /* MEN */
      array('category_name' => 'Joggers', 'parent_id' => 2, 'link' => '/categories/men', 'created_at' => Carbon::now()),
      array('category_name' => 'Football', 'parent_id' => 2, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Cricket', 'parent_id' => 2, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Tennis', 'parent_id' => 2, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Casual', 'parent_id' => 2, 'link' => '/products', 'created_at' => Carbon::now()),
      /* WOMEN */
      array('category_name' => 'Tops', 'parent_id' => 3, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Bottoms', 'parent_id' => 3, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Yoga Pants', 'parent_id' => 3, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Sports', 'parent_id' => 3, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Gym', 'parent_id' => 3, 'link' => '/products', 'created_at' => Carbon::now()),
      /* KIDs */
      array('category_name' => 'Tees', 'parent_id' => 4, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Shorts', 'parent_id' => 4, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Gear', 'parent_id' => 4, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Watches', 'parent_id' => 4, 'link' => '/products', 'created_at' => Carbon::now()),
      array('category_name' => 'Shoes', 'parent_id' => 4, 'link' => '/products', 'created_at' => Carbon::now()),
      // INSERT INTO `categories`(`category_name`, `parent_id`, `created_at`) VALUES ('Shoes', 1, CURRENT_TIME);
      // INSERT INTO `categories`(`category_name`, `parent_id`, `created_at`) VALUES ('Tees', 1, CURRENT_TIME);
      // INSERT INTO `categories`(`category_name`, `parent_id`, `created_at`) VALUES ('Tops', 1, CURRENT_TIME);
      // INSERT INTO `categories`(`category_name`, `parent_id`, `created_at`) VALUES ('Tracks', 1, CURRENT_TIME);
      // INSERT INTO `categories`(`category_name`, `parent_id`, `created_at`) VALUES ('Gear', 1, CURRENT_TIME);
    ));
  }
}
