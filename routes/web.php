<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
Use App\Http\Controllers\Test;


Auth::routes(['verify'=>true]);

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/l', function () {
    return view('home');
});
