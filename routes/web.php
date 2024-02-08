<?php

use App\Http\Controllers\payments\mpesa\MPESAController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name("index");

Route::post("stk", [MPESAController::class, 'stk'])->name("stk");
