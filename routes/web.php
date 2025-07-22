<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

Route::post('/api/chat', [ChatController::class, 'chat']);

Route::get('/', function () {
    return view('welcome');
});
