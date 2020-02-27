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
Route::get('/contact', function () {
    return view('contact');
});
Route::view('/about', 'about');

Route::view('contact', 'contact' );
Route::get('/custumers/index', 'CustomersController@index');
Route::get('/create', 'CustomersController@create');
Route::post('custumers', 'CustomersController@store');
Route::get('customers/{customer}', 'CustomersController@show');
Route::get('customers/{customer}/edit', 'CustomersController@edit');
Route::post('customers/{customer}/update', 'CustomersController@update');
Route::delete('customers/{customer}/delete', 'CustomersController@destroy');