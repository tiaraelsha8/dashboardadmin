<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\GaleriController;
use App\Http\Controllers\backend\BidangController;
use App\Http\Controllers\backend\PegawaiController;
use App\Http\Controllers\backend\ProbisController;
use App\Http\Controllers\backend\LayananController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('backend.dashboard');

    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update');

    Route::resource('galeri', GaleriController::class);

    Route::resource('bidang', BidangController::class);
    Route::post('bidang-import', [BidangController::class,'import'])->name('bidang.import');;

    Route::resource('pegawai', PegawaiController::class);
    Route::post('pegawai-import', [PegawaiController::class,'import'])->name('pegawai.import');

    Route::resource('probis', ProbisController::class);
    Route::post('probis-import', [ProbisController::class,'import'])->name('probis.import');

    Route::resource('layanan', LayananController::class);
    Route::post('layanan-import', [LayananController::class,'import'])->name('layanan.import');

});
