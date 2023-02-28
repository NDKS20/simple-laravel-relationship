<?php

use App\Http\Controllers\JawabanController;
use App\Http\Controllers\PilihanController;
use App\Http\Controllers\SoalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/soals', [SoalController::class, 'index']);
Route::post('/soals', [SoalController::class, 'store']);

Route::get('/soals/{id}', [SoalController::class, 'show']);
Route::put('/soals/{id}', [SoalController::class, 'update']);
Route::delete('/soals/{id}', [SoalController::class, 'destroy']);

Route::get('/pilihans', [PilihanController::class, 'index']);
Route::post('/pilihans', [PilihanController::class, 'store']);

Route::get('/pilihans/{id}', [PilihanController::class, 'show']);
Route::put('/pilihans/{id}', [PilihanController::class, 'update']);
Route::delete('/pilihans/{id}', [PilihanController::class, 'destroy']);

Route::get('/jawabans', [JawabanController::class, 'index']);
Route::post('/jawabans', [JawabanController::class, 'store']);

Route::get('/jawabans/{id}', [JawabanController::class, 'show']);
Route::put('/jawabans/{id}', [JawabanController::class, 'update']);
Route::delete('/jawabans/{id}', [JawabanController::class, 'destroy']);

Route::get('/soals-pilihans', [SoalController::class, 'soalsPilihans']);
Route::get('/soals-jawabans', [SoalController::class, 'soalsJawabans']);
Route::get('/soals-pilihans-jawabans', [SoalController::class, 'soalsPilihansJawabans']);