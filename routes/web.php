<?php

use App\Http\Controllers\AdminController;
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
Route::get('/ptsp/display', [PtspController::class, 'showDisplay']);
Route::get('/ptsp/admin', [AdminController::class, 'index']);
Route::get('/ptsp/call/show/{type}', [AdminController::class, 'showCall']);
Route::get('/ptsp/call/update/{category}/{type}', [AdminController::class, 'update']);
Route::get('/ptsp/recap/{time}', [AdminController::class, 'showRecap']);
Route::get('/ptsp/recap/export/{time}', [AdminController::class, 'exportToExcel']);
Route::get('/ptsp/reset', [AdminController::class, 'showReset']);
Route::post('/ptsp/reset/{category}/{type}', [AdminController::class, 'resetAntrian']);
Route::post('/ptsp/reset/all', [AdminController::class, 'resetAllAntrian']);
