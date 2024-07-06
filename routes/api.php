<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'states'], function () {
    Route::get('/', [\App\Http\Controllers\Api\StateController::class, 'index']);
});

Route::group(['prefix' => 'city'], function () {
    Route::get('/', [\App\Http\Controllers\Api\CityController::class, 'index']);
});

Route::group(['prefix' => 'customer'], function () {
    Route::get('/', [\App\Http\Controllers\Api\CustomerController::class, 'index']);
    Route::post('store', [\App\Http\Controllers\Api\CustomerController::class, 'store']);
    Route::get('{id}/show', [\App\Http\Controllers\Api\CustomerController::class, 'show']);
    Route::put('{id}/update', [\App\Http\Controllers\Api\CustomerController::class, 'update']);
    Route::delete('{id}/delete', [\App\Http\Controllers\Api\CustomerController::class, 'destroy']);
});
