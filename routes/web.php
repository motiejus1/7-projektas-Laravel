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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('books')->group(function () {

    Route::get('','BookController@index')->name('book.index');
    Route::get('create', 'BookController@create')->name('book.create');
    Route::post('store', 'BookController@store')->name('book.store');
    Route::get('edit/{book}', 'BookController@edit')->name('book.edit');
    Route::post('update/{book}', 'BookController@update')->name('book.update');
    Route::post('delete/{book}', 'BookController@destroy' )->name('book.destroy');
    Route::get('show/{book}', 'BookController@show')->name('book.show');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
