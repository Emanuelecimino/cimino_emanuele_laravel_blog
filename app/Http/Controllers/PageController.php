<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class PageController extends Controller
{
public function homepage() 
{
    $title = config('app.name');

    $articles = Article::orderBy('created_at', 'DESC')->take(10)->get();

    return view('homepages', compact('title', 'articles'));
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
    $articles = Article::where('visible', true)->get();

      return view('pages.articles', ['articles' => $articles]);
}

public function article(Article $article) 
{
    return view('pages.article', ['article' => $article]);
}

}