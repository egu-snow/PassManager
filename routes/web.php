<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AcountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SecurityQuestionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/acounts',[AcountController::class,'index'])->name('acount.list');
    Route::get('/acount/new',[AcountController::class,'create'])->name('acount.new');
    Route::post('/acount',[AcountController::class,'store'])->name('acount.store');
    Route::get('/acount/edit/{id}',[AcountController::class,'edit'])->name('acount.edit');
    Route::post('/acount/update/{id}',[AcountController::class,'update'])->name('acount.update');
    Route::delete('/acount/{id}',[AcountController::class,'destroy'])->name('acount.delete');

    //ミドルウェアあり
    Route::middleware('check.security.question')->group(function() {
        Route::get('/acount/{id}',[AcountController::class,'show'])->name('acount.show');
        //リダイレクト用ルート
        Route::get('/acount/{id}/redirect',[AcountController::class,'redirectShow'])->name('acount.redirect.show');
    });
    
    Route::get('/security-question',[SecurityQuestionController::class,'show'])->name('security.question');
    Route::post('/security-question',[SecurityQuestionController::class,'verify']);
    
});







require __DIR__.'/auth.php';
