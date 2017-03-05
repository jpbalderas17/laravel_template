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

Auth::routes();
Route::get('/', 'PageController@index');
Route::get('user/my_profile', 'UserController@myProfile');
Route::post('user/account_information', 'UserController@accountInformation');
Route::post('user/personal_information', 'UserController@personalInformation');
