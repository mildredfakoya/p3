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
Route::get('/', 'WelcomeController@welcome');
Route::get('/about', 'WelcomeController@about');
Route::get('/contact', 'WelcomeController@contact');
Route::get('/bmi', 'WelcomeController@calculate');
Route::post('/save', 'WelcomeController@save');

