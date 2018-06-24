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

Route::get('catergories/man', function () {
  return view('categories.man');
});
