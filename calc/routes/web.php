<?php

use App\Http\Controllers\CalcControlleNew;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController1;
use App\Http\Controllers\CalcController1Minus;
use App\Http\Controllers\BoxController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('calc', function () {
    return 'Check';
});

Route::get('calc/{action}/{x}/{y}', [CalcController1Minus::class, 'sum']);
Route::get('calc', [CalcControlleNew::class, 'show'])->name('show-calc');
Route::post('calc', [CalcControlleNew::class, 'calc'])->name('domath');

Route::group(['prefix' => 'box'], function () {
    Route::get('', [BoxController::class, 'index'])->name('box.index');
    Route::get('create', [BoxController::class, 'create'])->name('box.create');
    Route::post('store', [BoxController::class, 'store'])->name('box.store');
    Route::get('edit/{box}', [BoxController::class, 'edit'])->name('box.edit');
    Route::post('update/{box}', [BoxController::class, 'update'])->name('box.update');
    Route::post('delete/{box}', [BoxController::class, 'destroy'])->name('box.destroy');
    Route::get('show/{box}', [BoxController::class, 'show'])->name('box.show');
});
