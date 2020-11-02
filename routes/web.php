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
Route::get('/add','ProductController@addProducts');
Route::get('/search','ProductController@search');
Route::get('/autocomplete','ProductController@autocomplete')->name('autocomplete');
Route::get('/addPackages','PackageController@index');
Route::post('/x','PackageController@store');
