<!DOCTYPE html>
<html lang="en">

<head>
        @vite('resources/js/app.js')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laravel MVC</title>
</head>

<body>
    <h1 class="text-center py-5">My favorite movie list</h1>
    <div class="container d-flex flex-wrap">
            @foreach ($movies as $movie)
            <div class="card">
                <div class="card-body">
                  <h3>Titolo: {{$movie['title']}}</h3>
                  <h4>Titolo originale: {{$movie['original_title']}}</h4>
                  <h5>Nazionalita: {{$movie['nationality']}}</h5>
                  <h6>Data di uscita: {{$movie['date']}}</h6>
                  <h6>Voto della critica: {{$movie['vote']}}</h6>
                  <a href="#" class="btn btn-primary">Info</a>
                </div>
              </div>
            @endforeach
    </div>
</body>

</html>