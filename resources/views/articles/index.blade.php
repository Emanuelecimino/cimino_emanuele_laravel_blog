<x-layout title="Articoli">
     
  
    <h1>Articoli</h1>
   
    <x-success/>
        <div class="row">
            <div class="col-md-6 text-end">
                <a href="{{ route('articles.create') }}" class="btn btn-success">Crea articolo</a>
            </div>
        </div>

    <div class="mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Titolo</th>
                    <th>Categoria</th>
                    <th>Visibile</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>
                        @foreach( $article->categories as $category)
                        <span class="me-3">{{ $category->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        @if($article->visible)
                        <span class="badge text-bg-success">Si</span>
                        @else
                        <span class="badge text-bg-danger">No</span>
                        @endif
                    </td>
                    <td class="text-end">
                        <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-secondary">modifica</a>
                         <form class="d-inline ms-2" action="{{ route('articles.destroy', $article) }}" method="POST">
                         @csrf
                         @method('DELETE')
                         <button type="submit" class="btn btn-sm btn-danger">cancella</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</x-layout>