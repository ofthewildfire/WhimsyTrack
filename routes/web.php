<?php

use App\Http\Controllers\SightingController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::view('/add', 'add')->name('add-goblin');
Route::post('/add', [SightingController::class, 'store']);

// Route::middleware(['auth', 'verified'])->group(function () {
//    Route::view('dashboard', 'dashboard')->name('dashboard');
// });

require __DIR__.'/settings.php';
