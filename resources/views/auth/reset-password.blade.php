<x-layout title="Recupero password">
   <div class="row">
    <div class="col-md-6 mx-auto">
    <h1>Recupero password</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @error('password') <span class="small text-danger">{{ $message }}</span> @enderror

        <div class="mt-5">
            <form action="/reset-password" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ request()->route('token') }}">
            <div class="row g-3">

                <div class="col-12">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', request()->email) }}">
                    @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-12">
                    <label for="password_confirmation">Conferma Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Aggiorna password</button>
                </div>

            </div>
            </form>

        </div>
    </div>


   </div>

</x-layout >