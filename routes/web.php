<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');
Route::get('/program', [PageController::class, 'programs'])->name('programs');
Route::get('/inkubator', [PageController::class, 'incubators'])->name('incubators');
Route::get('/rekrutmen', [PageController::class, 'recruitments'])->name('recruitments');
Route::get('/artikel', [PageController::class, 'articles'])->name('articles');
Route::get('/artikel/{id}', [PageController::class, 'articleDetail'])->name('articles.show');

Route::get('/pengusaha', [\App\Http\Controllers\EntrepreneurController::class, 'index'])->name('pengusaha.index');
Route::get('/daftar-pengusaha', [\App\Http\Controllers\EntrepreneurController::class, 'create'])->name('pengusaha.create');
Route::post('/daftar-pengusaha', [\App\Http\Controllers\EntrepreneurController::class, 'store'])->name('pengusaha.store');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
