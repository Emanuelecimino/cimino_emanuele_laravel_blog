<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('welcome');

Route::get('/chi-siamo', [PageController::class, 'aboutUs'])->name('about-us');

Route::get('/contatti', [PageController::class, 'contacts'])->name('contacts');

Route::get('/articoli', [PageController::class, 'articles'])->name('articles');

Route::get('/articolo/{article?}', [PageController::class, 'article'])->name('article') ;