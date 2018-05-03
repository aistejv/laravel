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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/contacts', function (){
//   return '<h1>Contact page</h1>';
// })->name('Contacts');

// Route::resource('product', 'ProductController');

Route::get('/', 'ProductController@main')->name('main.page');
Route::get('/products', 'ProductController@index')->name('all.products');
Route::get('/products/{id}', 'ProductController@show')->name('one.product');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addproduct', 'ProductController@create')->name('add.product')->middleware('auth');

Route::get('/manufacturers', 'ManufacturerController@index')->name('all.manufacturers');
Route::get('/categories', 'CategoryController@index')->name('all.categories');

Route::post('/store', 'ProductController@store')->name('product.store')->middleware('auth');
Route::delete('/producs/{product}', 'ProductController@delete')->name('product.delete')->middleware('auth');
Route::get('/products/{product}/edit', 'ProductController@edit')->name('product.edit')->middleware('auth');
Route::put('/products/{product}/update', 'ProductController@update')->name('product.update')->middleware('auth');
