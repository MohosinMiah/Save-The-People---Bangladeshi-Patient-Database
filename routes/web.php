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


Route::get('/supperadmin','SuperUserController@index');

Route::get('/supperadmin/login','SuperUserController@login');

Route::post('/supperadmin/login/send','SuperUserController@send')->name('send_otp');
