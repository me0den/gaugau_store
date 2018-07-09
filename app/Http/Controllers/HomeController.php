<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Categories;

class HomeController extends BaseController {

  public function showLogin () {
    return \View::make('login');
  }

  public function doLogin () {

  }
  public function testRoute() {
    //Parent categories
    $parent_categories = Categories::where('parent_id', 0)->select('id', 'category_name', 'link')->get();
    //Child Categories
    $child_categories = Categories::where('parent_id', '!=', 0)->select('category_name','parent_id', 'link')->get();
    $parent_cat = array();
    $child_cat = array();
    foreach($parent_categories as $item) {
      array_push($parent_cat, $item['category_name']);
      return asset($item['link']);
    }
    foreach($child_categories as $item) {
      $child_cat[$item['parent_id']][] =  $item['category_name'];
    }
    // foreach($parent_categories as $item) {
    //   if (in_array($item['id'] , array_keys($child_cat))) {
    //     return $item['id'];
    //   }
    // }
    return asset('a');
  }
}
