<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('gempa')->group(function () {
    Route::get("/gempa", [\App\Http\Controllers\api\GempaController::class, "getGempa"]);
    Route::get("/cuaca/{provinsi}", [\App\Http\Controllers\api\GempaController::class, "getProvinsi"]);
    Route::get("/cuaca/{provinsi}/{kota}", [\App\Http\Controllers\api\GempaController::class, "getKota"]);
});
