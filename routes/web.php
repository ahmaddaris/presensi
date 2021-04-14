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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('mahad/{mahad}', 'MahadController@show')->name('mahad.show');

Route::resource('mahad/{mahad}/program', 'ProgramController');

Route::resource('program/{program}/classroom', 'ClassroomController')->except('index');
