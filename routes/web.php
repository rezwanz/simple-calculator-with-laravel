<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CalculatorController;

Route::get('/',[ViewController::class, 'home'])->name('/');
//Route::get('/', function (){
//   return view('welcome');
//});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('front.home.home');
    })->name('dashboard');
    Route::get('/calculator',[ViewController::class, 'calculator'])->name('calculator');
    Route::post('/get-result',[CalculatorController::class, 'getResult'])->name('get-result');
});
