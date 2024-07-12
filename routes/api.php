<?php

use App\Http\Controllers\Api\KoperasiController;
use App\Http\Controllers\Api\UkmController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/koperasis', KoperasiController::class);
Route::apiResource('/ukms', UkmController::class);
