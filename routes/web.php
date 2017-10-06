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

Route::get('/', 'PageController@index');
Route::get('/faqs', 'PageController@faqs');

Route::get('/student/dashboard', 'StudentController@dashboard');
Route::get('/student/profile', 'StudentController@profile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
