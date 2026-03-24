<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
   if (auth()->check()){
        return redirect()->route('dashboard');
   }
   return view('landingpage')
})->name('landingpage');

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/home', function(){
        return redirect()->route('dashboard');
    });
});