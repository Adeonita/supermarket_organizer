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


Route::get('/login','LoginController@login');

Route::get('product/create', 'ProductController@create');

Route::post('product/add', 'ProductController@add');

//List
Route::get('list/create', ['as' => 'createList', 'uses' => 'ListController@create']);
Route::get('/list', ['as' => 'show', 'uses' => 'ListController@show']);
Route::post('list/add', ['as' => 'insertList', 'uses' => 'Listcontroller@insert']);
Route::put('list/updade/{id}', ['as'=> 'updateList', 'uses' => 'ListController@update']);
Route::delete('list/delete/{id}', ['as' => 'deleteList', 'uses' => 'ListController@delete']);
