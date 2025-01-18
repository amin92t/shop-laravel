<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;


Route::prefix('admin')->namespace('Admin')->group(function(){

    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin');

});