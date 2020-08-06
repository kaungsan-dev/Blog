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

Route::get('blog','BlogController@blog')->name('blog.Blog');
Route::get('blog/create','BlogController@create')->middleware('auth');
Route::post('blog/save','BlogController@save')->name('save.Blog')->middleware('auth');
Route::get('blog/view/{id}','BlogController@view')->name('view.Blog');
Route::get('blog/edit/{id}','BlogController@edit')->name('edit.Blog')->middleware('auth');
Route::put('blog/update/{id}','BlogController@update')->name('update.Blog')->middleware('auth');
Route::post('blog/save','BlogController@save')->name('save.Blog')->middleware('auth');
Route::get('blog/delete/{id}','BlogController@delete')->name('delete.Blog')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
