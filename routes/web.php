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

Route::get('/list/categories', 'CategoriesController@list');

Route::get('/login','LoginController@login');

Route::get('/categories/description', 'CategoriesController@description');

Route::get('product/form', 'ProductController@form');

Route::get('product/add', 'ProductController@add');
