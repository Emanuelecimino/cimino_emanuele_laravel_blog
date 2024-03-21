<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homepage'])->name('welcome');

Route::get('/chi-siamo', [PageController::class, 'aboutUs'])->name('about-us');

Route::get('/contatti', [ContactController::class, 'viewForm'])->name('contacts');
Route::post('/contatti/send', [ContactController::class, 'send'])->name('contacts.send');

Route::get('/articoli', [PageController::class, 'articles'])->name('articles');

Route::get('/articolo/{article?}', [PageController::class, 'article'])->name('article') ;