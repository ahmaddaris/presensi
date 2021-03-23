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

Route::get('/seed', function(\App\Student $student) {
    $faker = Faker\Factory ::create();
    
    foreach (range(1,100) as $x) {
        $student->create([
            'name' => $faker->name(3)          
        ]);
    }
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('mahad/{mahad_id}', 'MahadController@index') ;

Route::get('mahad/{mahad}/program/tambah', 'ProgramController@create') ;

Route::post('mahad/{mahad}/program/store', 'ProgramController@store') ;
//Route::get('mahad/{mahad}/program/edit/{id}', 'ProgramController@edit')->name('program.edit') ;
Route::delete('mahad/{mahad}/program/', 'ProgramController@destroy')->name('program.destroy');
Route::get('mahad/{mahad}/program', 'ProgramController@show')->name('program.show');

Route::get('/students', 'StudentController@index');

Route::get('/home', 'HomeController@index')->name('home');
