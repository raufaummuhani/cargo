<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BidangKesehatanMasyarakatController;
use App\Http\Controllers\BidangPelayananKesehatanMasyarakatController;
use App\Http\Controllers\BidangPencegahanPenyakitMenularController;
use App\Http\Controllers\BidangSumberDayaKesehatanMasyarakatController;
use App\Http\Controllers\SekretariatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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


Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

// Proses login (POST)
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

// Logout (POST)
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('bidang_kesehatan', BidangKesehatanMasyarakatController::class);
Route::resource('bidang_pelayanan_kesehatan', BidangPelayananKesehatanMasyarakatController::class);
Route::resource('bidang_pencegahan', BidangPencegahanPenyakitMenularController::class);
Route::resource('sumber_daya', BidangSumberDayaKesehatanMasyarakatController::class);
Route::resource('sekretariat', SekretariatController::class);
Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');

      Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


require __DIR__.'/auth.php';
