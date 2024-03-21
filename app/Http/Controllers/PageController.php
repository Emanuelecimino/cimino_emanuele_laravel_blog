<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public $articles;

public function __construct()
{
        $this->articles = [
            ['title' => 'Studente 1', 'category' => 'Part-Time', 'description' => 'Sono uno studente', 'visible' => true],
            ['title' => 'Studente 2', 'category' => 'Part-Time', 'description' => 'Sono uno studente', 'visible' => false ],
            ['title' => 'Studente 3', 'category' => 'Part-Time', 'description' => 'Sono uno studente','visible' => true]
    ]; 
}

public function homepage() 
{
    $title = config('app.name');

    return view('homepages', compact('title'));
}



public function aboutUs() 
{
        return view('pages.chi-siamo', [
            'title' => 'About Us', 
            'description' => 'Siamo studenti di Aulab'
        ]);
}

public function articles() 
{
    //dd($this->articles);
      return view('pages.articles', ['articles' => $this->articles]);
}

public function article($article) 
{
    $article = $this->articles[$article];
    if(! $article['visible']) {
        abort(404);
    }
    return view('pages.article', ['article' => $article]);
}

}