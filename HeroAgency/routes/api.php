<?php

use App\Http\Controllers\HeroController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/hero',[HeroController::class, 'index']);
Route::get('/hero/{id}', [HeroController::class, 'show']);
Route::post('/hero', [HeroController::class, 'store']);
Route::put('/hero/{id}', [HeroController::class, 'update']);
Route::delete('/hero/{id}', [HeroController::class, 'destroy']);