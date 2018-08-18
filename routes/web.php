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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('admin_panel/main', function () {
    return view('admin_panel.main');
});

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');
Route::get('/news', 'NewsController@index')->name('news');
Route::get('news/{id}', 'NewsController@show')->name('news.show');
Route::get('/admin_panel/news/', 'NewsController@index_admin')->name('news.admin');
Route::get('/admin_panel/news/create', 'NewsController@create')->name('news.create');
Route::post('/admin_panel/news/store', 'NewsController@store')->name('news.store');
Route::get('/admin_panel/news/store/{id}', 'NewsController@edit')->name('news.edit');
Route::post('/admin_panel/news/update/{id}', 'NewsController@update')->name('news.update');
Route::delete('/admin_panel/news/delete/{id}', 'NewsController@delete')->name('news.delete');