<?php

use App\Http\Controllers\CallController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PtspController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|     
*/

Route::get('/', [HomeController::class, 'show']);
Route::get('/ptsp', [PtspController::class, 'show']);
Route::post('/ptsp/update-antrian', [PtspController::class, 'incrementAntrian']);
Route::get('/ptsp/call', [CallController::class, 'show']);
