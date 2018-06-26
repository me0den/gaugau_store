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

Route::group(['prefix' => 'catergories'], function () {
  Route::get('men', function () {
    return view('categories.men');
  });
  Route::get('women', function () {
    return view('categories.women');
  });
  Route::get('kids', function () {
    return view('categories.kids');
  });
  Route::get('formal', function () {
    return view('categories.formal');
  });
  Route::get('casuals', function () {
    return view('categories.casuals');
  });
  Route::get('sports', function () {
    return view('categories.sports');
  });
});
