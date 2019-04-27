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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/' , 'FrontendController@index')->name('frontend.index');
Route::get('admin/dashboard' , 'HomeController@dashboard')->name('admin.dashboard');
Route::get('admin/index/{slug}' , 'HomeController@index')->name('admin.index');
Route::post('admin/datatable/{slug}' , 'HomeController@getDataTable')->name('admin.datatable');
Route::get('admin/create/{slug}' , 'HomeController@create')->name('admin.create');
Route::get('admin/edit/{slug}/{id}' , 'HomeController@edit')->name('admin.edit');
Route::post('admin/store/{slug}' , 'HomeController@store')->name('admin.store');
Route::post('admin/update/{id}' , 'HomeController@update')->name('admin.update');
Route::get('admin/delete/{id}/{slug}' , 'HomeController@delete')->name('admin.delete');
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('admin.datatable.index');
