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

//route to admin main page
Route::get('admin_panel/main', function () {
    return view('admin_panel.main');
})->name('admin.main')->middleware('auth');
// происходит редирект на страницу логина , лучше сделать на главную

//route to reservuars-metal-construction index page
Route::get('productions/reservuars-metal-construction/index', function () {
    return view('productions.reservuars-metal-construction.index');
})->name('reservuars_metal_construction.index');

//route to reservuar vertical
Route::get('productions/reservuars-metal-construction/vertical', function () {
    return view('productions.reservuars-metal-construction.vertical');
})->name('reservuar.vertical');

//route to reservuar horizontal
Route::get('productions/reservuars-metal-construction/horizontal', function () {
    return view('productions.reservuars-metal-construction.horizontal');
})->name('reservuar.horizontal');

// временный роутер для резерваурного оборудования
/*Route::get('productions/reservuars-equipment/index', function () {
    return view('productions.reservuars-equipment.index');
})->name('reservuars-equipment.index');*/


Auth::routes();

//Главная
Route::get('/', 'HomeController@index')->name('home');

//Резервуарное оборудование
Route::get('productions/reservuars-equipment/index', 'ReservuarsEquipmentController@index')->name('reservuars-equipment.index');
Route::get('productions/reservuars-equipment/{id}', 'ReservuarsEquipmentController@show')->name('reservuars-equipment.show');

//Новости
Route::get('/news', 'NewsController@index')->name('news');
Route::get('news/{id}', 'NewsController@show')->name('news.show');
Route::get('/admin_panel/news/', 'NewsController@index_admin')->name('news.admin');
Route::get('/admin_panel/news/create', 'NewsController@create')->name('news.create');
Route::post('/admin_panel/news/store', 'NewsController@store')->name('news.store');
Route::get('/admin_panel/news/store/{id}', 'NewsController@edit')->name('news.edit');
Route::post('/admin_panel/news/update/{id}', 'NewsController@update')->name('news.update');
Route::delete('/admin_panel/news/delete/{id}', 'NewsController@delete')->name('news.delete');