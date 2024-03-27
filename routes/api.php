<?php

use App\Http\Controllers\{
    AuthorController,
    PetitionController,
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/petitions', PetitionController::class);
Route::resource('/authors', AuthorController::class)->only([
    'index', 'show'
]);
