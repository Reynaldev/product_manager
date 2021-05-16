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

// Main Router
Route::get('/', 'MainController@index');
Route::get('/about', 'MainController@about');

// Add data
Route::get('/add', 'MainController@addData');
Route::post('/add/store', 'MainController@add');

// Edit data
Route::get('/edit/{id}', 'MainController@edit');
Route::post('/update', 'MainController@update');

// Delete data
Route::get('/delete/{id}', 'MainController@delete');
