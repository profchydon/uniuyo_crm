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

Route::get('/', 'PageController@index')->name('home');
Route::get('/login', 'PageController@login');
Route::get('/faqs', 'PageController@faqs');

Route::post('/student/login', 'StudentController@signin');

Route::post('/student/register', 'StudentController@register');

Route::get('/student/dashboard', 'StudentController@dashboard');
Route::get('/student/profile', 'StudentController@profile');

Route::post('/book-appointment', 'AppointmentController@bookAppointment');

Auth::routes();

Route::get('/home', 'HomeController@index');
