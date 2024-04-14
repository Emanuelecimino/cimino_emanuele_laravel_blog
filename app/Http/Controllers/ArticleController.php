<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreArticleRequest;
use App\Models\Category;

use Illuminate\Http\Request;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get();

        return view('articles.index', ['articles' => $articles]);
    }    
    public function create()
    {
       return view('articles.create', ['categories' => Category::all()]);
    }

    public function store(StoreArticleRequest $request)
    {
        
        $article = Article::create(array_merge($request->all(), ['user_id' => auth()->user()->id]));

        $article->user_id = auth()->user()->id;

        if($request->hasFile('image')&& $request->file('image')->isValid()) {

            $extension = $request->file ('image')->getClientOriginalExtension();

            $fileName = 'image.' . $extension;

            $fileName = uniqid('image_') . '.' . $extension;

            $article->image = $request->file('image')->storeAs('public/images/' . $article->id, $fileName);    

            $article->save(); 
        }

        return redirect()->route('articles.index')->with(['success' => 'Articolo creato correttamente!']);
    }

    public function edit(Article $article)
    {
        if($article->user_id !== auth()->user()->id) {
            abort(403);
        }

        return view('articles.edit', [
            'article' => $article,
            'categories' => Category::all(),
        ]);
    }

    public function update(StoreArticleRequest $request, Article $article)
    {
        if($article->user_id !== auth()->user()->id) {
            abort(403);
        }

        $article->update($request->all());

        return redirect()->back()->with(['success' => 'Articolo modificato correttamente!']);
    }

    public function destroy(Article $article)
    {
        if($article->user_id !== auth()->user()->id) {
            abort(403);
        }

        $article->delete();

        return redirect()->back()->with(['success' => 'Articolo cancellato correttamente!']);
    }
}

