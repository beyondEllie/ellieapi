<?php

use App\Http\Controllers\openai;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/openai', [openai::class, 'index']);
