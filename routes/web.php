<?php

use Illuminate\Support\Facades\Route;

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
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('tables', 'TablesController');
Route::get('tables/destroy/{id}', ['as' => 'tables/destroy', 'uses' => 'TablesController@destroy']);
Route::get('tables/edit/{id}', ['as' => 'tables/edit', 'uses' => 'TablesController@edit']);
Route::post('tables/show', ['as' => 'tables/show', 'uses' => 'TablesController@show']);

Route::resource('products', 'ProductsController');
Route::get('products/destroy/{id}', ['as' => 'products/destroy', 'uses' => 'ProductsController@destroy']);
Route::get('products/edit/{id}', ['as' => 'products/edit', 'uses' => 'ProductsController@edit']);
Route::get('products/addtocart/{id}', ['as' => 'products/addtocart', 'uses' => 'ProductsController@addtocart']);

Route::get('cart', 'ProductsController@cart')
;
Route::post('products/show', ['as' => 'products/show', 'uses' => 'ProductsController@show']);



Route::resource('register', 'Auth\RegisterController');
Route::get('register/store', ['as' => 'register/store', 'uses' => 'RegisterController@store']);

Route::get('admin', function(){
	return view('/admin/layout');
});