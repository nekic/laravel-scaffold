<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::resource('games', App\Http\Controllers\API\GameAPIController::class)
    ->except(['create', 'edit']);