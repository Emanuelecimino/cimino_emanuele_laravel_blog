<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;


Route::get('/', [PageController::class, 'homepage'])->name('welcome');

Route::get('/chi-siamo', [PageController::class, 'aboutUs'])->name('about-us');

Route::get('/contatti', [ContactController::class, 'viewForm'])->name('contacts');
Route::post('/contatti/send', [ContactController::class, 'send'])->name('contacts.send');

Route::get('/articoli', [PageController::class, 'articles'])->name('articles');

Route::get('/articolo/{article}', [PageController::class, 'article'])->name('article');

Route::prefix('account')->middleware('auth')->group(function () {

    Route::get('/', [AccountController::class,'index'])->name('account.index');
    Route::get('/articles', [ArticleController::class,'index'])->name('articles.index');
    Route::get('/articles/create', [ArticleController::class,'create'])->name('articles.create');
    Route::post('/articles/store', [ArticleController::class,'store'])->name('articles.store');
    Route::get('/articles/{article}/edit', [ArticleController::class,'edit'])->name('articles.edit');
    Route::put('/articles/{article}/update', [ArticleController::class,'update'])->name('articles.update');
    Route::delete('/articles/{article}/destroy', [ArticleController::class,'destroy'])->name('articles.destroy');

    Route::resource('/categories', CategoryController::class);
    
});

