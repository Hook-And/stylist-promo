<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayKeeperController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// PayKeeper маршруты
Route::post('/pay/form', [PayKeeperController::class, 'initPayment'])->name('paykeeper.init');
Route::post('/pay/callback', [PayKeeperController::class, 'callback'])->name('paykeeper.callback');
Route::get('/pay/success', [PayKeeperController::class, 'success'])->name('paykeeper.success');
Route::post('/pay/recover', [PayKeeperController::class, 'recover'])->name('paykeeper.recover');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Админ-панель маршруты
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        Route::post('/update/{id}', [AdminController::class, 'update'])->name('admin.update');
        Route::post('/update-multiple', [AdminController::class, 'updateMultiple'])->name('admin.updateMultiple');
    });
});

require __DIR__.'/auth.php';