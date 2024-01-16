<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegionalController;
use App\Http\Controllers\RegionalSalesController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SupplyChainController;
use App\Http\Controllers\WarehouseController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// In routes/web.php
define('PROFILE_PATH', '/profile');

Route::middleware('auth')->group(function () {
    Route::get(PROFILE_PATH.'/overview', [ProfileController::class, 'profile'])->name('profile.overview');
    Route::get(PROFILE_PATH.'/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post(PROFILE_PATH, [ProfileController::class, 'update'])->name('profile.update');
    Route::get(PROFILE_PATH.'/deactivate/{id}', [ProfileController::class, 'deactivate'])->name('profile.deactivate');
    Route::post(PROFILE_PATH.'/patch', [ProfileController::class, 'patch'])->name('profile.patch');
    Route::post(PROFILE_PATH.'/patch/password', [ProfileController::class, 'patchPassword'])->name('profile.patch.password');
    Route::post(PROFILE_PATH.'/patch/email', [ProfileController::class, 'patchEmail'])->name('profile.patch.email');
    Route::delete(PROFILE_PATH, [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'role:super_admin'])->group(function() {
    Route::get('/admin', [AdminController::class, 'Dashboard'])->name('admin.dashboard');
}); // End of Admin Middleware

Route::middleware(['auth', 'role:supply_chain_manager'])->group(function() {
    Route::get('/supply_chain', [SupplyChainController::class, 'Dashboard'])->name('supply_chain.dashboard');
}); // End of Supply Chain Middleware

Route::middleware(['auth', 'role:warehouse_operator'])->group(function() {
    Route::get('/warehouse', [WarehouseController::class, 'Dashboard'])->name('warehouse.dashboard');
}); // End of Warehouse Middleware

Route::middleware(['auth', 'role:sales_manager'])->group(function() {
    Route::get('/sales', [SalesController::class, 'Dashboard'])->name('sales.dashboard');
}); // End of Sales Middleware

Route::middleware(['auth', 'role:regional_sales_manager'])->group(function() {
    Route::get('/regional_sales', [RegionalSalesController::class, 'Dashboard'])->name('regional_sales.dashboard');
}); // End of Regional Sales Middleware

Route::middleware(['auth', 'role:regional_manager'])->group(function() {
    Route::get('/regional', [RegionalController::class, 'Dashboard'])->name('regional.dashboard');
}); // End of Admin Middleware


