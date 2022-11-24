<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoligonosController;
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/triangle', [PoligonosController::class, 'triangle']);

Route::post('/rectangle', [PoligonosController::class, 'rectangle']);

Route::get('/result', [PoligonosController::class, 'result']);
