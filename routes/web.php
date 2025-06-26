<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\GaleriController;
use App\Http\Controllers\backend\BidangController;
use App\Http\Controllers\backend\PegawaiController;
use App\Http\Controllers\backend\ProbisController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

    // Forgot password
    Route::get('/password/forgot', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    // Reset password
    Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
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

});

// Route::get('/test-email', function () {
//     try {
//         Mail::raw('Ini adalah email percobaan dari Laravel', function ($message) {
//             $message->to('elshawinatiara@gmail.COM') // ← ganti dengan email tujuan
//                     ->subject('Test Email Laravel');
//         });
//         return 'Email berhasil dikirim!';
//     } catch (\Exception $e) {
//         return 'Gagal kirim email: ' . $e->getMessage();
//     }
// });
