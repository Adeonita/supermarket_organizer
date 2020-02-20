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

//Products
Route::get('/products', 'ProductController@index'); //List all products
Route::get('/products/{id}', 'ProductController@show')->where('id', '[0-9]+'); //List product{id}
Route::post('products', 'ProductController@store'); //Insert one product
Route::put('products/{id}', 'ProductController@update')->where('id', '[0-9]+'); //Update product{id}
Route::delete('products/{id}', 'ProductController@delete')->where('id', '[0-9]+'); //Delete product{id}

//List
Route::get('lists','ListController@index'); //List all lists
Route::post('lists',  'ListController@store'); //Insert one list
Route::put('lists/{id}', 'ListController@update'); //Update list{id}
Route::delete('lists/{id}', 'ListController@delete'); //Delete list{id}
Route::get('/lists/{id}', 'ListController@show'); //Show list{id}

