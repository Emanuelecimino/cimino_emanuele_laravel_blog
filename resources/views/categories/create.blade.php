<x-layout title="Crea categoria">
    <a href="{{ route('categories.index') }}" class="text-secondary">indietro</a>
    <h1>Crea categoria</h1>

    <x-success />
    
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="row g-3">
            <div class="col-12">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                @error('name') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Crea</button>
            </div>

        </div>
    </form>
</x-layout>