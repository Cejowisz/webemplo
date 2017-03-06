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



//Route::resource('users', 'UsersController@index');
Route::resource('test', 'TestController');

// Pages
Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('career', 'PagesController@career');
Route::get('login', 'PagesController@login');
Route::get('media', 'PagesController@media');

//Route::get('subscription', 'SubscriptionController@index');

// Admin
Route::get('admin', 'AdminController@index');


// Users
Route::get('users', 'UsersController@index');

// Subscribers
Route::get('downline', 'LevelOneController@giveDownline');


Auth::routes();


Route::get('/home', 'HomeController@index');
