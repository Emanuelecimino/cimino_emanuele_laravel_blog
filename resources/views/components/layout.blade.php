
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<x-navbar />
<div class="container mt-5">
    {{ $slot }}
</div>


</body>


</html>