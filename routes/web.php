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

Route::get('/', function() {return redirect()->to("/landing");});
Route::get('/landing', 'PageRequestController@viewLanding');
Route::get('/register', 'PageRequestController@viewRegister');
Route::get('/user', 'PageRequestController@viewUser');

Route::get('/umkm', 'UmkmController@viewIndex');
Route::get('/umkm/create', 'UmkmController@create');
Route::post('/umkm/store', 'UmkmController@store');
Route::get('/umkm/{umkm:name}', 'UmkmController@show');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
