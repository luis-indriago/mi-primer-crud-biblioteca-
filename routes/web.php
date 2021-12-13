<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AutorController;
use app\Http\Controllers\LibroController;
use app\Http\Controllers\DatatableController;


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

Route::get('/', 'HomeController@home')->name('home');


Route::group(['prefix' => 'autor'], function () {
    Route::get('index', 'AutorController@index')->name('autor.index');
    Route::get('show/{id}', 'AutorController@show')->name('autor.show');
    Route::get('create', 'AutorController@create')->name('autor.create');
    Route::post('store', 'AutorController@store')->name('autor.store');
    Route::get('edit/{id}', 'AutorController@edit')->name('autor.edit');
    Route::put('update/{id}', 'AutorController@update')->name('autor.update');
    Route::delete('destroy/{id}', 'AutorController@destroy')->name('autor.destroy');
});


Route::group(['prefix' => 'libro'], function () {
    Route::get('index', 'LibroController@index')->name('libro.index');
    Route::get('show/{libro}', 'LibroController@show')->name('libro.show');
    Route::get('create', 'LibroController@create')->name('libro.create');
    Route::post('store', 'LibroController@store')->name('libro.store');
    Route::get('edit/{id}', 'LibroController@edit')->name('libro.edit');
    Route::put('update/{libro}', 'LibroController@update')->name('libro.update');
    Route::delete('destroy/{libro}', 'LibroController@destroy')->name('libro.destroy');
});

Route::get('datatable/autores', 'DatatableController@autor')->name('datatable.autor');
