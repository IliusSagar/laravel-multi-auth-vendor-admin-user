<?php

// use App\Http\Controllers\Backend\AdminController;
// use App\Http\Controllers\Backend\VendorController;

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\VendorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->middleware(['auth', 'role:admin'])->name('admin.dashboard');
// Route::get('vendor/dashboard',[VendorController::class, 'dashboard'])->middleware(['auth', 'role:vendor'])->name('vendor.dashboard');


Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('vendor/login', [VendorController::class, 'login'])->name('vendor.login');