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

//route to admin production page
Route::get('admin_panel/production', function () {
    return view('admin_panel.productions.index');
})->name('admin.production')->middleware('auth');

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
//Клиенты
Route::post('/clients/add', 'ClientsController@store')->name('clients.add');
Route::delete('/clients/delete/{id}', 'ClientsController@delete')->name('clients.delete');
//Главная
Route::get('/', 'HomeController@index')->name('home');

Route::put('/update', 'HomeController@update')->name('home.update');
//Партнеры
Route::get('admin_panel/partners/index', 'PartnersController@index')
->name('admin.partners.index');
Route::post('admin_panel/partners/add', 'PartnersController@store')
->name('admin.partners.add');
Route::delete('admin_panel/partners/delete/{id}', 'PartnersController@delete')
->name('admin.partners.delete');
//Пожаротушение
Route::get('productions/fire-fighting/index', 'FireFightingController@index')->name('fire-fighting.index');
Route::get('productions/fire-fighting/{id}', 'FireFightingController@show')->name('fire-fighting.show');

//Пожаротушение
Route::get('admin_panel/productions/fire-fighting', 'FireFightingController@admin_show')
    ->name('admin.fire-fighting.index');
Route::get('admin_panel/productions/fire-fighting/create', 'FireFightingController@create')
    ->name('admin.fire-fighting.create');
Route::post('admin_panel/productions/fire-fighting/store', 'FireFightingController@store')
    ->name('admin.fire-fighting.store');
Route::get('admin_panel/productions/fire-fighting/edit/{id}', 'FireFightingController@edit')
    ->name('admin.fire-fighting.edit');
Route::post('admin_panel/productions/fire-fighting/update/{id}', 'FireFightingController@update')
    ->name('admin.fire-fighting.update');
Route::delete('admin_panel/productions/fire-fighting/delete/{id}', 'FireFightingController@delete')
    ->name('admin.fire-fighting.delete');
Route::get('admin_panel/productions/fire-fighting/pdf/{pdf}', 'FireFightingController@show_pdf')
    ->name('fire-fighting.pdf');

//Металоконструкции
Route::get('productions/metal-construction-buldings/index', 'MetalConstructionController@index')->name('metal-construction-buldings.index');
Route::get('productions/metal-construction-buldings/{id}', 'MetalConstructionController@show')->name('metal-construction-buldings.show');

//Металоконструкции
Route::get('admin_panel/productions/metal-construction-buldings', 'MetalConstructionController@admin_show')
    ->name('admin.metal-construction-buldings.index');
Route::get('admin_panel/productions/metal-construction-buldings/create', 'MetalConstructionController@create')
    ->name('admin.metal-construction-buldings.create');
Route::post('admin_panel/productions/metal-construction-buldings/store', 'MetalConstructionController@store')
    ->name('admin.metal-construction-buldings.store');
Route::get('admin_panel/productions/metal-construction-buldings/edit/{id}', 'MetalConstructionController@edit')
    ->name('admin.metal-construction-buldings.edit');
Route::post('admin_panel/productions/metal-construction-buldings/update/{id}', 'MetalConstructionController@update')
    ->name('admin.metal-construction-buldings.update');
Route::delete('admin_panel/productions/metal-construction-buldings/delete/{id}', 'MetalConstructionController@delete')
    ->name('admin.metal-construction-buldings.delete');
Route::get('admin_panel/productions/metal-construction-buldingspdf/{pdf}', 'MetalConstructionController@show_pdf')
    ->name('metal-construction.pdf');

//Резервуарное оборудование
Route::get('productions/reservuars-equipment/index', 'ReservuarsEquipmentController@index')->name('reservuars-equipment.index');
Route::get('productions/reservuars-equipment/{id}', 'ReservuarsEquipmentController@show')->name('reservuars-equipment.show');

//Резервуарное оборудование админка
Route::get('admin_panel/productions/reservuars-equipment', 'ReservuarsEquipmentController@admin_show')
    ->name('admin.reservuars-equipment.index');
Route::get('admin_panel/productions/reservuars-equipment/create', 'ReservuarsEquipmentController@create')
    ->name('admin.reservuars-equipment.create');
Route::post('admin_panel/productions/reservuars-equipment/store', 'ReservuarsEquipmentController@store')
    ->name('admin.reservuars-equipment.store');
Route::get('admin_panel/productions/reservuars-equipment/edit/{id}', 'ReservuarsEquipmentController@edit')
    ->name('admin.reservuars-equipment.edit');
Route::post('admin_panel/productions/reservuars-equipment/update/{id}', 'ReservuarsEquipmentController@update')
    ->name('admin.reservuars-equipment.update');
Route::delete('admin_panel/productions/reservuars-equipment/delete/{id}', 'ReservuarsEquipmentController@delete')
    ->name('admin.reservuars-equipment.delete');
Route::get('admin_panel/productions/reservuars-equipment/pdf/{pdf}', 'ReservuarsEquipmentController@show_pdf')
    ->name('equipment.pdf');

//Новости
Route::get('/news', 'NewsController@index')->name('news');
Route::get('news/{id}', 'NewsController@show')->name('news.show');
Route::get('/admin_panel/news/', 'NewsController@index_admin')->name('news.admin');
Route::get('/admin_panel/news/create', 'NewsController@create')->name('news.create');
Route::post('/admin_panel/news/store', 'NewsController@store')->name('news.store');
Route::get('/admin_panel/news/edit/{id}', 'NewsController@edit')->name('news.edit');
Route::post('/admin_panel/news/update/{id}', 'NewsController@update')->name('news.update');
Route::delete('/admin_panel/news/delete/{id}', 'NewsController@delete')->name('news.delete');