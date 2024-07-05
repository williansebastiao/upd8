<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response(['message' => "It's running"], \App\Constants\StatusCode::SUCCESS);
});
