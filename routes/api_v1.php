<?php

use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\RecipeController;
use App\Http\Controllers\Api\V1\TagController;

Route::prefix('v1')->group(function () {
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('recipes',    RecipeController::class);
    Route::apiResource('tags',       TagController::class);
});
