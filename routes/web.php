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
Route::get('sale/{id}','SaleController@sale');

Route::get('/', 'Auth\LoginController@login')->name('index');
Route::post('search','SaleController@search')->name('search');
Route::post('bills','SaleController@bill')->name('bills');
Route::get('list','SaleController@list')->name('list');



Route::group(['middleware'=>'auth'],function(){


	Route::resource('/category','CategoryController'); 
	Route::resource('/brand','BrandController'); 
	Route::resource('/product','ProductController'); 
	Route::resource('/shop','ShopController'); 
	Route::resource('/user','UserController'); 
	Route::resource('/sale','SaleController'); 
	
	Route::get('category/{id}','CategoryController@category')->name('category');


});

// Auth::routes(); 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



