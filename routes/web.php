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
//LOGIN MANAGMENT
Route::get('/', 'UserLoginController@showLoginForm');
Route::get('/login', 'UserLoginController@showLoginForm');
Route::post('/login', 'UserLoginController@login');

//LOGOUT MANAGEMENT
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

//REGISTER MANAGEMENT
Route::get('/register', 'UserRegisterController@showRegisterForm');
Route::post('/register', 'UserRegisterController@register');

//HOME MANAGEMENT
Route::get('/home', 'HomeController@index');


