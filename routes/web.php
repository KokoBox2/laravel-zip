<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountyController;

Route::get('/', [CountyController::class, 'index'])->name('counties.index');
