<?php

use App\Http\Controllers\AdminIdController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminMenuController;
use App\Models\AdminId;
use Monolog\Handler\RotatingFileHandler;

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

Route::resource('/admin_menu', AdminMenuController::class);
Route::resource('/admin_main', AdminController::class);
Route::resource('/admin_kategori',AdminKategoriController::class);
Route::resource('/admin_id', AdminIdController::class);

Route::get('/admin_kategori/create', 'AdminKategoriController@create')->name('admin_kategori.create');
Route::get('/admin_kategori/{id}/edit', 'AdminKategoriController@edit')->name('admin_kategori.edit');
Route::put('/admin_kategori/{id}', 'AdminKategoriController@update')->name('admin_kategori.update');
Route::put('/admin_kategori/{id}', 'AdminKategoriController@destroy')->name('admin_kategori.destroy');

Route::get('/admin_menu/create', 'AdminMenuController@create')->name('admin_menu.create');
Route::get('/admin_menu/{id}/edit','AdminMenuController@edit')->name('admin_menu.edit');
Route::put('/admin_menu/{id}','AdminMenuController@update')->name('admin_menu.update');


Route::get('/admin_id/{id}/edit','AdminMenuController@edit')->name('admin_id.edit');
Route::put('/admin_id/{id}','AdminMenuController@update')->name('admin_id.update');

