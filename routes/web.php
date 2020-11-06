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
Route::get('/test', 'PageRequestController@viewTest');

Route::get('/umkm', 'UmkmController@viewIndex');
Route::get('/umkm/create', 'UmkmController@create');
Route::post('/umkm/store', 'UmkmController@store');
Route::post('/umkm/post', 'UmkmController@post');
Route::get('/umkm/{umkm:id}', 'UmkmController@show');

Route::get('/profile/{user:id}', 'ProfileController@show');



Route::get('/voucher', 'VoucherController@viewIndex');
Route::post('/voucher/buy', 'VoucherController@buy');
Route::get('/voucher/create', 'VoucherController@create');
Route::post('/voucher/store', 'VoucherController@store');
Route::get('/voucher/{voucher:id}', 'VoucherController@show');



Route::get('/categories/{category:name}', 'CategoryController@show');

Route::get('/rating/{rating:umkm_id}', 'RatingController@viewRating');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
