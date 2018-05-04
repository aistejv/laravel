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
Route::get('/addproduct', 'ProductController@create')->name('add.product')->middleware('admin');
Route::post('/products', 'ProductController@store')->name('product.store')->middleware('admin');
Route::get('/products/{id}', 'ProductController@show')->name('one.product');
Route::get('/products/{product}/edit', 'ProductController@edit')->name('product.edit')->middleware('admin');
Route::put('/products/{product}/update', 'ProductController@update')->name('product.update')->middleware('admin');
Route::delete('/products/{product}', 'ProductController@delete')->name('product.delete')->middleware('admin');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/manufacturers', 'ManufacturerController@index')->name('all.manufacturers');
Route::get('/manufacturers/{id}', 'ManufacturerController@show')->name('one.manufacturer');
Route::delete('/manufacturers/{id}', 'ManufacturerController@delete')->name('manufacturer.delete');
Route::get('/manufacturers/{id}/edit', 'ManufacturerController@edit')->name('manufacturer.edit');
Route::put('/manufacturers/{id}/update', 'ManufacturerController@update')->name('manufacturer.update');

Route::get('/categories', 'CategoryController@index')->name('all.categories');
Route::get('/categories/{id}', 'CategoryController@show')->name('one.category');
Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('category.edit');
Route::put('/categories/{id}/update', 'CategoryController@update')->name('category.update');
Route::delete('/categories/{id}', 'CategoryController@delete')->name('category.delete');


Route::get('/many', function(){
  $manufacturer = App\Manufacturer::find(6);
  foreach($manufacturer->products as $product){
    echo $product->title;
  }
});
