<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\CargoTrackingController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\VehicleController;

use App\Http\Controllers\MitraController;
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
Route::get('/cek-role', function () {
    return auth()->user()->getRoleNames();
})->middleware('auth');
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth','role:mitra'])->prefix('mitra')->group(function () {

    Route::get('/cargo', [CargoController::class, 'index'])
        ->name('mitra.cargo.index');
        
    
            Route::get('/cargo/edit', [CargoController::class, 'edit'])
        ->name('mitra.cargo.edit');
    Route::get('/cargo/create', [CargoController::class, 'create'])
        ->name('mitra.cargo.create');
            Route::get('/cargo/edit', [CargoController::class, 'edit'])
        ->name('mitra.cargo.edit');
    Route::get('/cargo/create', [CargoController::class, 'create'])
        ->name('mitra.cargo.create');
            Route::put('/cargo/{cargo}/update', [CargoController::class, 'update'])
        ->name('mitra.cargo.update');
    Route::get('/cargo/{cargo}', [CargoController::class, 'show'])
        ->name('mitra.cargo.show');
         Route::get('/surat-jalan/{cargo}', [CargoController::class, 'show'])
    ->name('surat-jalan.show');
          Route::resource('driver', DriverController::class);

          
Route::get('cargo/tracking/{cargoTracking}/edit', [CargoTrackingController::class,'edit'])->name('mitra.cargo_tracking.edit');
Route::put('cargo/tracking/{cargoTracking}', [CargoTrackingController::class,'update'])->name('mitra.cargo_tracking.update');
Route::delete('cargo/tracking/{cargoTracking}', [CargoTrackingController::class,'destroy'])->name('mitra.cargo_tracking.destroy');
Route::get('/cargo/{cargo}/tracking', [CargoTrackingController::class, 'index'])->name('mitra.cargo_tracking.index');
Route::get('cargo/{cargo}/tracking/create', [CargoTrackingController::class,'create'])->name('mitra.cargo_tracking.create');
Route::post('cargo/tracking', [CargoTrackingController::class,'store'])->name('mitra.cargo_tracking.store');

});
  Route::middleware('auth','role:super-admin|admin|mitra')->group(function () {
 
    Route::get('/cargo', [CargoController::class, 'index'])->name('cargo.index');
   

Route::resource('mitra', MitraController::class);

Route::resource('cargo', CargoController::class);
  // Route::get('/cargo', [CargoController::class, 'index'])->name('cargo.index');

Route::resource('vehicle', VehicleController::class);

Route::get('cargo/tracking/{cargoTracking}/edit', [CargoTrackingController::class,'edit']);
Route::put('cargo/tracking/{cargoTracking}', [CargoTrackingController::class,'update']);

Route::get('/cargo/{cargo}/tracking', [CargoTrackingController::class, 'index'])->name('cargo_tracking.index');
Route::get('cargo/{cargo}/tracking/create', [CargoTrackingController::class,'create'])->name('cargo_tracking.create');
Route::post('cargo/tracking', [CargoTrackingController::class,'store'])->name('cargo_tracking.store');

Route::delete('cargo/tracking/{cargoTracking}', [CargoTrackingController::class,'destroy'])->name('cargo_tracking.destroy');
  Route::resource('driver', DriverController::class);
});


Route::middleware('auth','role:super-admin')->group(function () {
Route::post('users/{user}/reset-password',
    [UserController::class,'resetPassword']
)->name('admin.users.reset-password');
   Route::put('/user/{user}/make-admin', [UserController::class, 'makeAdmin'])
        ->name('user.makeAdmin');
Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');

      Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
 
    Route::resource('cargo', CargoController::class);
       Route::put('/user/{id}/make-admin', [UserController::class, 'makeAdmin'])->name('user.makeAdmin');
       Route::put('/user/{id}/make-mitra', [UserController::class, 'makeMitra'])->name('user.makeMitra');
           Route::put('/user/{id}/make-driver', [UserController::class, 'makeDriver'])->name('user.makeDriver');

 Route::post('/users/{id}/role', [UserController::class, 'updateRole'])->name('user.updateRole');
  Route::put('/users/{user}/reset-password',
    [UserController::class, 'resetPassword'])->name('user.resetPassword');
     Route::get('/user/{id}/reset', [UserController::class, 'reset'])->name('user.reset');
     
   
});
    Route::middleware('auth','role:super-admin|admin|driver')->group(function () {
      Route::get('/cargo', [CargoController::class, 'index'])->name('cargo.index');
     Route::get('/cargo/{cargo}/tracking', [CargoTrackingController::class, 'index'])->name('cargo_tracking.index');
        Route::get('cargo/tracking/{cargoTracking}/edit', [CargoTrackingController::class,'edit'])->name('cargo_tracking.edit');
        Route::put('cargo/tracking/{cargoTracking}', [CargoTrackingController::class,'update'])->name('cargo_tracking.update');
    });


require __DIR__.'/auth.php';
