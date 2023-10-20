<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminIdController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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



Route::group(['middleware'=>'guest'], function (){
    Route::resource('/user', UserController::class);
    Route::post('/user', 'App\Http\Controllers\UserController@option')->name('user.option');
    Route::post('/user/show', 'App\Http\Controllers\UserController@show')->name('information.option');
    Route::get('/admin_login/register', [AuthController::class,'register'])->name('register');
    Route::post('/admin_login/register', [AuthController::class,'registerPost'])->name('register');
    Route::get('/admin_login/login', [AuthController::class,'login'])->name('login');
    Route::post('/admin_login/login', [AuthController::class,'loginPost'])->name('login');


});
Route::group(['middleware'=>'auth'], function (){
    Route::resource('/admin_menu', AdminMenuController::class);
    Route::resource('/admin', AuthController::class);
    Route::resource('/admin_kategori',AdminKategoriController::class);
    Route::resource('/admin_id', AdminIdController::class);
    Route::put('/admin/update/{id}', 'App\Http\Controllers\AuthController@update')->name('auth.update');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});


