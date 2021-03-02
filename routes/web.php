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

Route::get('/', 'PageController@index');

/* -------- Start of product -------- */
Route::get('/products', 'PageController@index');
Route::get('/products/create', 'ProductController@create');
Route::post('/products/create', 'ProductController@store');
/* -------- End of product -------- */

/* -------- Start of cart -------- */
Route::get('/products/{cart}/add-cart', 'PageController@addCart');
Route::get('/products/show-cart', 'PageController@showCart');
/* -------- End of cart -------- */
