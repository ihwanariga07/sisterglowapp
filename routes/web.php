<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController; 
use Illuminate\Support\Facades\Auth;

Route::get('/home', function () {
    return view('home');
});

Route::get('/cektemplate', function () {
    return view('layouts.template');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('customers', CostumerController::class);
Route::get('/costumers', [CostumerController::class, 'index'])->name('costumers.index');
