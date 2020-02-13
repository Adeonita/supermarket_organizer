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

Route::get('product/create', 'ProductController@create');

Route::post('product/add', 'ProductController@add');

//List
Route::get('list/create', ['as' => 'createList', 'uses' => 'ListController@create']);
Route::post('list/add', ['as' => 'insertList', 'uses' => 'Listcontroller@insert']);
Route::put('list/updade', ['as'=> 'updateList', 'uses' => 'ListController@update']);
Route::delete('list/Delete', ['as' => 'deleteList', 'uses' => 'ListController@delete']);

