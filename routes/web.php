<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Account;
use App\Http\Controllers\AccountController;

Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('accounts',[AccountController::class,'index'])->name('accounts.index');
    Route::get('accounts/create',[AccountController::class,'create'])->name('accounts.create');
    Route::get('accounts/{account}',[AccountController::class,'show'])->name('accounts.show');


    Route::post('accounts/store',[AccountController::class,'store'])->name('accounts.store');

});
