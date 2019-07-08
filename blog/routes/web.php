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

Route::get('login','LoginController@getLogin');
Route::post('login','LoginController@postLogin');

Route::get('signUp','SignUpController@getSignUp');
Route::post('signUp','SignUpController@postSignUp');


Route::get('user/{id}','UserController@getUser');
Route::post('user/{id}','UserController@postUser');
Route::get('user/{id}','UserController@post');

Route::get('personal','PersonalController@getPersonal');
Route::post('personal','PersonalUpController@postPersonal');