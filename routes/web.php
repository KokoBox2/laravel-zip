<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountyController;

Route::get('/', [CountyController::class, 'index'])->name('counties.index');
Route::get('/counties/create', [CountyController::class, 'create'])->name('counties.create');
Route::post('/counties', [CountyController::class, 'store'])->name('counties.store');
Route::get('/counties/{county}', [CountyController::class, 'show'])->name('counties.show');
Route::get('/counties/{county}/edit', [CountyController::class, 'edit'])->name('counties.edit');
Route::patch('/counties/{county}', [CountyController::class, 'update'])->name('counties.update');
Route::delete('/counties/{county}', [CountyController::class, 'destroy'])->name('counties.destroy');
