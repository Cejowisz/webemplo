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
Route::get('/admin', ['as' => 'admin.index', 'uses' => 'AdminController@index']);
Route::get('admin/users', ['as' => 'users.index', 'uses' => 'AdminController@users']);
Route::get('admin/user/{id}', ['as' => 'users.show', 'uses' => 'AdminController@show']);
Route::get('admin/downline/{id}', ['as' => 'users.downline', 'uses' => 'AdminController@brf']);
Route::get('total-users', 'AdminController@totalUsers');




// Users
Route::get('users', 'UsersController@index');

// Subscribers
Route::get('downline', 'LevelOneController@giveDownline');

// Test
Route::get('test', 'TestController@test');


// Stage 2
Route::get('stage2', ['as' => 'stage2.store', 'uses' => 'LevelTwoController@store']);


Auth::routes();


Route::get('/home', 'HomeController@index');
