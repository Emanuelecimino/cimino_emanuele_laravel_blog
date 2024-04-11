
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('welcome')}}">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('articles')}}">Articoli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about-us')}}">Chi sono</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contacts')}}">Contatti</a>
        </li>
    </ul>
    <ul>
        @auth
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->email }}
                </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('articles.index') }}">Gestione articoli</a></li>
                <li><a class="dropdown-item" href="{{ route('categories.index') }}">Gestione categorie</a></li>
                <li><a class="dropdown-divider"></a></li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Esci</button>
                    </form>
                </li>
            </ul>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="/register">Registrati</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login">Accedi</a>
            </li> 
        @endauth 
      </ul>
    </div>
  </div>
</nav><br>


        
        
