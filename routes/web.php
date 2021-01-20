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

Route::resource('/autoveods', 'AutoveodController');

Route::put('/autoveods/{autoveod}/tehtud', 'AutoveodController@tehtud')->name('autoveod.tehtud');
Route::delete('/autoveods/{autoveod}/tegemata', 'AutoveodController@tegemata')->name('autoveod.tegemata');
Route::delete('/autoveods/{autoveod}/probleem', 'AutoveodController@probleem')->name('autoveod.probleem');

Route::get('/', function () {
    return view('welcome');
});
