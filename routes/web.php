<?php

use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountyController;


//county routes
Route::get('/', [CountyController::class, 'index'])->name('counties.index');
Route::get('/counties/create', [CountyController::class, 'create'])->name('counties.create');
Route::post('/counties', [CountyController::class, 'store'])->name('counties.store');
Route::get('/counties/{county}', [CountyController::class, 'show'])->name('counties.show');
Route::get('/counties/{county}/edit', [CountyController::class, 'edit'])->name('counties.edit');
Route::patch('/counties/{county}', [CountyController::class, 'update'])->name('counties.update');
Route::delete('/counties/{county}', [CountyController::class, 'destroy'])->name('counties.destroy');
//city routes
Route::get('county/{county}/cities', [CityController::class, 'index'])->name('cities.index');
Route::get('county/{county}/cities/create', [CityController::class, 'create'])->name('cities.create');
Route::post('county/{county}/cities', [CityController::class, 'store'])->name('cities.store');
Route::get('county/{county}/cities/{city}', [CityController::class, 'show'])->name('cities.show');
Route::get('county/{county}/cities/{city}/edit', [CityController::class, 'edit'])->name('cities.edit');
Route::patch('county/{county}/cities/{city}', [CityController::class, 'update'])->name('cities.update');
Route::delete('county/{county}/cities/{city}', [CityController::class, 'destroy'])->name('cities.destroy');
