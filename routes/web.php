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
    return view('welcome');
});

Route::get('/api/books', 'APIBookController@index');

Route::get('/books', 'BookController@index');
Route::get('/books/{id}', 'BookController@show');


Route::get('/publishers', 'PublisherController@index');
Route::get('/publishers/{id}', 'PublisherController@show');


Route::get('/eshop', 'EshopController@index');
Route::get('/eshop/categories/{id}', 'EshopController@category');

Route::get('/eshop/subcategories/{id}', 'EshopController@subcategory');
