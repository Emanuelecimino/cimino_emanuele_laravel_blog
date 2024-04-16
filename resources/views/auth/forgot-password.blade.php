<x-layout title="Recupero password">
   <div class="row">
    <div class="col-md-6 mx-auto">
    <h1>Recupero password</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

        <div class="mt-5">
            <form action="/forgot-password" method="POST">
            @csrf
            <div class="row g-3">

                <div class="col-12">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                    @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Recupera password</button>
                </div>

            </div>
            </form>

        </div>
    </div>


   </div>

</x-layout >