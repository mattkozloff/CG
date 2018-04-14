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

Route::get('/about', function () {
    return view('about');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/users/create', 'UsersController@create')->name('users.create');
Route::get('/users/edit/{id}', 'UsersController@edit')->name('users.edit');
Route::post('/users/store', 'UsersController@store')->name('users.store');
Route::post('/users/{id}', 'UsersController@update')->name('users.update');
Route::get('/users/destroy/{id}', 'UsersController@destroy')->name('users.destroy');

Route::get('/rooms', 'RoomsController@index')->name('rooms.index');
Route::get('/rooms/create', 'RoomsController@create')->name('rooms.create');
Route::get('/rooms/edit/{id}', 'RoomsController@edit')->name('rooms.edit');
Route::post('/rooms/store', 'RoomsController@store')->name('rooms.store');
Route::post('/rooms/{id}', 'RoomsController@update')->name('rooms.update');
Route::get('/rooms/destroy/{id}', 'RoomsController@destroy')->name('rooms.destroy');

Route::get('/planttypes', 'PlanttypesController@index')->name('planttypes.index');
Route::get('/planttypes/create', 'PlanttypesController@create')->name('planttypes.create');
Route::get('/planttypes/edit/{id}', 'PlanttypesController@edit')->name('planttypes.edit');
Route::post('/planttypes/store', 'PlanttypesController@store')->name('planttypes.store');
Route::post('/planttypes/{id}', 'PlanttypesController@update')->name('planttypes.update');
Route::get('/planttypes/destroy/{id}', 'PlanttypesController@destroy')->name('planttypes.destroy');

Route::get('/plants', 'PlantsController@index')->name('plants.index');
Route::get('/plants/create', 'PlantsController@create')->name('plants.create');
Route::get('/plants/edit/{id}', 'PlantsController@edit')->name('plants.edit');
Route::post('/plants/store', 'PlantsController@store')->name('plants.store');
Route::post('/plants/{id}', 'PlantsController@update')->name('plants.update');
Route::get('/plants/destroy/{id}', 'PlantsController@destroy')->name('plants.destroy');
