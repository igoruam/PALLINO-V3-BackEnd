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
use Illuminate\Support\Facades\Storage;

Route::get('images/{path}', function ($path) {
    $path = urldecode($path);

    if (!Storage::disk('public')->exists($path)) {
        abort(404);
    }

    $file = Storage::disk('public')->get($path);
    $mimeType = Storage::disk('public')->mimeType($path);

    return response($file, 200)->header('Content-Type', $mimeType);
})->where('path', '.*');

Route::apiResource('marchi', MarchioController::class);
Route::apiResource('referenti', ReferenteController::class);
Route::apiResource('pavimenti-rivestimenti-battiscopa', PavimentoRivestimentoBattiscopaController::class)
    ->parameters(['pavimenti-rivestimenti-battiscopa' => 'item']);
Route::apiResource('stufe', StufaController::class);
Route::apiResource('sanitari', SanitarioController::class);
Route::apiResource('rubinetterie', RubinettteriaController::class);
Route::apiResource('complementi-arredo', ComplementoArredoController::class);
Route::apiResource('illuminazione', IlluminazioneController::class);
Route::apiResource('termoarredi', TermoarredoController::class);
Route::apiResource('box-doccia', BoxDocciaController::class);
