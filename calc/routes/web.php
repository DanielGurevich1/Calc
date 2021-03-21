<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController1;
use App\Http\Controllers\CalcController1Minus;

Route::get('/', function () {
    return view('welcome');
});
Route::get('calc', function () {
    return 'Check';
});

Route::get('calc/{action}/{x}/{y}', [CalcController1Minus::class, 'sum']); //kelias, urlas, controller method name, {} kintamasis