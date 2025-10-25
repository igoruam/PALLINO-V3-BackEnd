<?php

use App\Http\Controllers\Api\MarchioController;
use App\Http\Controllers\Api\ReferenteController;
use App\Http\Controllers\Api\PavimentoRivestimentoBattiscopaController;
use App\Http\Controllers\Api\StufaController;
use App\Http\Controllers\Api\SanitarioController;
use App\Http\Controllers\Api\RubinettteriaController;
use App\Http\Controllers\Api\ComplementoArredoController;
use App\Http\Controllers\Api\IlluminazioneController;
use App\Http\Controllers\Api\TermoarredoController;
use App\Http\Controllers\Api\BoxDocciaController;
use Illuminate\Support\Facades\Route;

Route::apiResource('marchi', MarchioController::class);
Route::apiResource('referenti', ReferenteController::class);
Route::apiResource('pavimenti-rivestimenti-battiscopa', PavimentoRivestimentoBattiscopaController::class);
Route::apiResource('stufe', StufaController::class);
Route::apiResource('sanitari', SanitarioController::class);
Route::apiResource('rubinetterie', RubinettteriaController::class);
Route::apiResource('complementi-arredo', ComplementoArredoController::class);
Route::apiResource('illuminazione', IlluminazioneController::class);
Route::apiResource('termoarredi', TermoarredoController::class);
Route::apiResource('box-doccia', BoxDocciaController::class);
