<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AcountController;
use Illuminate\Support\Facades\Route;

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
});



Route::get('/acounts',[AcountController::class,'index'])->name('acount.list');
Route::get('/acount/new',[AcountController::class,'create'])->name('acount.new');
Route::post('/acount',[AcountController::class,'store'])->name('acount.store');

Route::get('/acount/{id}',[AcountController::class,'show'])->name('acount.show');
Route::delete('/acount/{id}',[AcountController::class,'destroy'])->name('acount.delete');


require __DIR__.'/auth.php';
