<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminKategoriController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::resource('/admin_main', \App\Http\Controllers\AdminController::class);
Route::resource('/admin_menu', \App\Http\Controllers\AdminMenuController::class);
Route::resource('/admin_kategori',\App\Http\Controllers\AdminKategoriController::class);

Route::get('/admin_kategori/create', 'AdminKategoriController@create')->name('admin_kategori.create');
Route::get('/admin_kategori/{id}/edit', 'AdminKategoriController@edit')->name('admin_kategori.edit');
Route::put('/admin_kategori/{id}', 'AdminKategoriController@update')->name('admin_kategori.update');
Route::put('/admin_kategori/{id}', 'AdminKategoriController@destroy')->name('admin_kategori.destroy');

Route::get('/admin_menu/create', 'AdminMenuController@create')->name('admin_menu.create');
