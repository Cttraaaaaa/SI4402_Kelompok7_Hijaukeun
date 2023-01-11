<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\RelawanController;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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


// Admin/Petugass
Route::prefix('admin')
    ->middleware(['auth', 'admin'])

    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('dashboard');

        Route::resource('pengaduans', 'PengaduanController');

        Route::resource('tanggapan', 'TanggapanController');




        Route::get('masyarakat', 'AdminController@masyarakat');
        Route::resource('petugas', 'PetugasController');
        Route::resource('relawan', 'RelawanController');


        Route::get('laporan', 'AdminController@laporan');
        Route::get('donasi', 'AdminController@donasi');
        Route::get('relawan', 'AdminController@relawan');

        Route::get('laporan/cetak', 'AdminController@cetak');
        Route::get('pengaduan/cetak/{id}', 'AdminController@pdf');
});


// Masyarakat
Route::prefix('user')
    ->middleware(['auth', 'MasyarakatMiddleware'])
    ->group(function() {
				Route::get('/', 'MasyarakatController@index')->name('masyarakat-dashboard');
                Route::resource('pengaduan', 'MasyarakatController');
                Route::get('pengaduan', 'MasyarakatController@lihat');
                Route::get('index', 'MasyarakatController@create');
                Route::get('profile', 'MasyarakatController@Profile');
                Route::post('profile', 'MasyarakatController@Profile_action');
                Route::get('logout', 'MasyarakatController@logout');
                
});

Route::get('/donasi', [DonasiController::class, 'index']);
Route::post('/donasi', [DonasiController::class,'store']);
Route::get('/history', [DonasiController::class,'lihat']);
Route::post('/history', [DonasiController::class,'lihat']);
Route::get('/relawan', [RelawanController::class, 'index']);
Route::post('/relawan', [RelawanController::class, 'store']);
Route::get('/historyr', [RelawanController::class, 'lihat']);
Route::get('/detailr', [RelawanController::class, 'lihat']);




require __DIR__.'/auth.php';
