<!DOCTYPE html>
<html lang="en">

<head>
        @vite('resources/js/app.js')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel MVC</title>
</head>

<body>
    <div class="container">
        <h1>My favorite movie list</h1>
        <ul>
            @foreach ($movies as $movie)
                <li class="list-unstyled">{{$movie['title']}}</li>
            @endforeach
        </ul>
    </div>
</body>

</html>