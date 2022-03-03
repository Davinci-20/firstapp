<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TestController::class, 'index']);
// Route::get('/about', [TestController::class, 'about']);
Route::post('/create', [TestController::class, 'create']);
