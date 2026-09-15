<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountyController;

Route::get('/', [CountyController::class, 'index'])->name('counties.index');
Route::get('/counties/create', [CountyController::class, 'create'])->name('counties.create');
Route::post('/counties', [CountyController::class, 'store'])->name('counties.store');
