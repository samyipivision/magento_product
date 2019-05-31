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
    return view('welcome');
});

Route::get('/products/viewer', 'ProductController@viewer');
Route::get('/products/updater', 'ProductController@updater');
Route::delete('/products/{pid}/delete', 'ProductController@delete');
Rooute::get('/products/{pid}/edit','ProductController@editor');
Route::post('products/{pid}/edit', 'ProductController@edit');
