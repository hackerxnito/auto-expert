<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/buy-a-car', [PageController::class, 'buy'])->name('buy');
Route::get('/sell-your-car', [PageController::class, 'sell'])->name('sell');
Route::get('/car-diagnosis', [PageController::class, 'diagnosis'])->name('diagnosis');
Route::get('/financing', [PageController::class, 'financing'])->name('financing');
Route::get('/test-drive', [PageController::class, 'testDrive'])->name('test-drive');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');