<x-layout>
    <span>{{ $article->category->name }}</span>
    <h1 class="title">{{ $article->title }}</h1>
    <div class="my-3">
        Autore: {{ $article->user->name }} - <a href="mailto:{{ $article->user->email }}">{{ $article->user->email }}</a>
    </div>
    <p>{{ $article['description']}}</p>

    <img class="img-fluid" src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}">

</x-layout>