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
Route::get('/product', 'ProductController@index'); //List all products
Route::get('/product/{id}', 'ProductController@show')->where('id', '[0-9]+'); //List product{id}
Route::post('product', 'ProductController@store'); //Insert one product
Route::put('product/{id}', 'ProductController@update')->where('id', '[0-9]+'); //Update product{id}
Route::delete('product/{id}', 'ProductController@delete')->where('id', '[0-9]+'); //Delete product{id}

//List
Route::get('list','ListController@index'); //List all lists
Route::post('list',  'ListController@store'); //Insert one list
Route::put('list/{id}', 'ListController@update'); //Update list{id}
Route::delete('list/{id}', 'ListController@delete'); //Delete list{id}

