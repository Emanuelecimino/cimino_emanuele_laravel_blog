<x-layout>

    <h1 class="title">Articoli</h1>

    <div>
        @if($articles)
            @foreach($articles as $article)
                <x-card
                    :category="$article->category"
                    :title="$article->title"
                    :description="$article->description" 
                    :route="route('article', $article->id)" 
                />
            @endforeach
        @else
                <p>Non ci sono articoli disponibili</p>
        @endif
    </div>
</x-layout>
