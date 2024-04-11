<x-layout title="Elenco categorie">
    <div class="row">
        <div class="col-lg-6">
            <h1>Elenco categorie</h1>
        </div>
        <div class="col-ld-6 text-end">
            <a href="{{ route('categories.create') }}" class="btn btn-success">Crea categoria</a>
        </div>
    </div>
    
    <x-success />

    <table class="table table-bordered mt-5">
        <thead>
            <th>#</th>
            <th>Nome</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td class="text-end">
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-secondary btn-sm">modifica</a>
                    <form class="d-inline ms-2" action="{{ route('categories.destroy', $category) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">cancella</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>