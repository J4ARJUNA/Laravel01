<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminIdController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminMenuController;

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
Route::resource('/admin', AdminController::class);
Route::resource('/admin_kategori',AdminKategoriController::class);
Route::resource('/admin_id', AdminIdController::class);

Route::put('/admin/update/{id}', 'App\Http\Controllers\AdminController@update')->name('admin.update');


