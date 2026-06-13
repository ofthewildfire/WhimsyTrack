<?php

use App\Http\Controllers\SightingController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::view('/add', 'add')->name('add-goblin');
Route::post('/add', [SightingController::class, 'store']);
Route::get('/sighting/{sighting}', [SightingController::class, 'view']);
Route::get('/sighting/{sighting}/edit', [SightingController::class, 'edit']);
Route::patch('/sighting/{sighting}/update', [SightingController::class, 'update']);
Route::delete('/sighting/{sighting}/delete', [SightingController::class, 'destroy']);
require __DIR__.'/auth.php';
