<?php

use App\Http\Controllers\MateriaisController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::Resource('materiais', MateriaisController::class);