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
// Road for Add new acount
Route::get('/register', 'RegisterController@getRegister');
Route::get('/register/new', 'RegisterController@NewRegister');

// Road for get advert in Database;
Route::get('/view/all', 'ViewController@getAll');
Route::get('/view/sold', 'ViewController@getSold');
Route::get('/view/rent', 'ViewController@getRent');
Route::get('/view/detail/{id}', 'ViewController@getDetail');