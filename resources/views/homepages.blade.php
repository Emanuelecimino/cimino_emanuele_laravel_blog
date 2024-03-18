<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Homepages</title>

    </head>
    <body>

    <nav class="nav">
        <a class="nav-link" href="{{route('welcome')}}">Home</a>
        <a class="nav-link" href="{{route('articles')}}">Articoli</a>
        <a class="nav-link" href="{{route('about-us')}}">Chi sono</a>
        <a class="nav-link" href="{{route('contacts')}}">Contatti</a>
        
    </nav>
        <h1>Benvenuto</h1>   


    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
