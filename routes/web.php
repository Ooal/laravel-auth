<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'GuestController@index') -> name('index');
Route::get('/employee/{id}', 'GuestController@show') -> name('show_epm');
Route::get('/task/{id}', 'TaskController@show') -> name('show_tas');
Route::get('/delete/{id}', 'LoggedController@destroy') -> name('delete');
Route::get('/edit/{id}', 'LoggedController@edit') -> name('edit');
Route::post('/update/{id}', 'LoggedController@update') -> name('update');
Route::get('/create', 'LoggedController@create') -> name('create');
Route::post('/create', 'LoggedController@store') -> name('store');
Auth::routes();
