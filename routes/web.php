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

//Route::resource('/autoveods', 'AutoveodController');
Route::get('/autoveods', 'App\Http\Controllers\AutoveodController@index');
Route::get('/autoveods/create', 'App\Http\Controllers\AutoveodController@create');
Route::get('/autoveods/edit', 'App\Http\Controllers\AutoveodController@edit');
Route::post('/autoveods/create', 'App\Http\Controllers\AutoveodController@store');

Route::get('/', function () {
    return view('welcome');
});
