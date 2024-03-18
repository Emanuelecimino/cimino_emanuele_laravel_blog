<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepages');
})->name('welcome');

Route::get('/chi-siamo', function () {
    return view('pages.chi-siamo', [
        'title' => 'About Us', 
        'description' => 'Siamo studenti di Aulab'
    ]);
})->name('about-us');

Route::get('/contatti', function () {
    return view('pages.contacts', [
        'title' => 'Contatti'
    ]);
})->name('contacts');

Route::get('/articoli', function () {

    $articles = [
            ['title' => 'Studente 1', 'category' => 'Part-Time', 'description' => 'Sono uno studente'],
            ['title' => 'Studente 2', 'category' => 'Part-Time', 'description' => 'Sono uno studente'],
            ['title' => 'Studente 3', 'category' => 'Part-Time', 'description' => 'Sono uno studente']
    ];

   // $articles = [];

    return view('pages.articles', ['articles' => $articles]);

})->name('articles');


Route::get('/articolo/{article?}', function ($article) {

    $index = $article;

    $articles = [
        ['title' => 'Studente 1', 'category' => 'Part-Time', 'description' => 'Sono uno studente Aulab'],
        ['title' => 'Studente 2', 'category' => 'Part-Time', 'description' => 'Sono uno studente Aulab'],
        ['title' => 'Studente 3', 'category' => 'Part-Time', 'description' => 'Sono uno studente Aulab']
];


if(array_key_exists($index, $articles)) {

    return view('pages.article', ['article' => $articles[$index]]);
} else {
    abort(404);
}
    
})->name('article') ;