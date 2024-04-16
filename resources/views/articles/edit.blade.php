<x-layout title="Modifica articolo">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <a href="{{ route('articles.index') }}" class=""small text-secondary>Indietro</a>
            <h1>Modifica articolo</h1>

            <x-success />

            <div class="mt-5">
                    <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row g-3">
                        
                            <div class="col-12">
                                <label for="title">Titolo</label>
                                <input type="text" name="title" id="title" 
                                    class="form-control @error('title') is-invalid @enderror" maxlength="150" 
                                    value="{{ old('title', $article->title) }}">
                                @error ('title') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-12">
                                <label for="categories">Categoria</label>
                                @foreach($categories as $category)
                                <div class="form-check">
                                    <input class="form-check-input" 
                                        @checked($article->categories->contains($category->id))
                                        name="categories[]" 
                                        type="checkbox" value="{{ $category->id }}">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ $category->name }}
                                    </label>
                                </div>
                                @endforeach
                                @error ('categories') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-12">
                                <label for="description">Descrizione</label>
                                <textarea type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" maxlength="255">{{ old('description', $article->description) }}</textarea>
                                @error ('description') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12">
                                <label for="image">Immagine</label>
                                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                                @error ('image') <span class="text-danger small fw-bold">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary" rows="5">Modifica</button>
                            </div>
                        </div>

                    </form>
            </div>
                    

        </div>   
    </div> 
</x-layout>