<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public $articles;

public function __construct()
{
        $this->articles = [
            ['title' => 'Studente 1', 'category' => 'Part-Time', 'description' => 'Sono uno studente'],
            ['title' => 'Studente 2', 'category' => 'Part-Time', 'description' => 'Sono uno studente'],
            ['title' => 'Studente 3', 'category' => 'Part-Time', 'description' => 'Sono uno studente']
    ]; 
}

public function homepage() 
{
    $title = config('app.name');

    return view('homepages', compact('title'));
}

public function contacts() 
{
        return view('pages.contacts', [
            'title' => 'Contatti'
        ]);
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
        return view('pages.articles', ['articles' => $this->articles]);
}

public function article($article) 
{
    return view('pages.article', ['article' => $this->articles[$article]]);
}

}