<x-layout title="$title">
    <a href="{{ route('categories.index') }}" class="text-secondary">indietro</a>
    <h1>{{ $title }}</h1>

    <x-success />
    
    <form action="{{ $action }}" method="POST">
        @csrf
        @if($category->id)
            @method('PUT')
        @endif
        <div class="row g-3">
            <div class="col-12">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $category->name) }}">
                @error('name') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">{{ $button_text }}</button>
            </div>

        </div>
    </form>
</x-layout>