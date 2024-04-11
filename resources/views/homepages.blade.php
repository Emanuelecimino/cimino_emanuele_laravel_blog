<x-layout>

        <h1 class="title-blue">{{ $title }}</h1>   

        <div class="mt-5">
                <ul>
                        @foreach($articles as $article)                        
                        <li>{{ $article->title }}</li>
                        @endforeach
                </ul>
        </div>

</x-layout>
    
