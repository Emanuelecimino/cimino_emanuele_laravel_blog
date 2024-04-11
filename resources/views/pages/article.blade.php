<x-layout>
    <h1 class="title">{{ $article->title }}</h1>
    <p>{{ $article['description']}}</p>

    <img class="img-fluid" src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}">

</x-layout>