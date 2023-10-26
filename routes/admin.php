<?php

use App\Http\Controllers\Backend\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard',[AdminController::class, 'dashboard'])->middleware(['auth', 'role:admin'])->name('dashboard');