<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');
Route::get('/program', [PageController::class, 'programs'])->name('programs');
Route::get('/inkubator', [PageController::class, 'incubators'])->name('incubators');
Route::get('/rekrutmen', [PageController::class, 'recruitments'])->name('recruitments');
Route::get('/artikel', [PageController::class, 'articles'])->name('articles');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
