<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('login', LoginController::class);

Route::middleware('auth:sanctum')->group(function () {
    
    require __DIR__.'/api_v1.php';

    require __DIR__.'/api_v2.php';

});
