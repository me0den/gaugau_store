<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//login
Route::get('user/login', array('uses' => 'HomeController@showLogin'));
// Route::get('user/login', array('uses' => 'HomeController@doLogin'));

Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('product/{id}', 'ProductController@showProductDetail');

Route::get('foo', function() {
	return asset('mycss/stype.css');
});

/** CATEGORIES **/
Route::group(['prefix' => 'categories'], function () {
  Route::get('men', function () {
    return view('categories.content', array('name' => 'Categories - Men'));
  });
  Route::get('women', function () {
    return view('categories.content', array('name' => 'Categories - Women'));
  });
  Route::get('kids', function () {
    return view('categories.content', array('name' => 'Categories - Kids'));
  });
  Route::get('formal', function () {
    return view('categories.content', array('name' => 'Categories - Formal'));
  });
  Route::get('casuals', function () {
    return view('categories.content', array('name' => 'Categories - Casuals'));
  });
  Route::get('sports', function () {
    return view('categories.content', array('name' => 'Categories - Sport'));
  });
});

//route test
Route::get('test', 'HomeController@testRoute');
