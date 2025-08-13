<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel_model_controller</title>
</head>
<body>
    <h1>Lista Film</h1>
    <div style="display: flex; flex-wrap: wrap; gap: 20px;">
        @foreach($movies as $movie)
            <div style="border: 1px solid #ccc; border-radius: 8px; width: 250px; padding: 16px; box-shadow: 2px 2px 8px #eee; background: #fff;">
                <h2>{{ $movie->title ?? 'Titolo film' }}</h2>
                <p><strong>Anno:</strong> {{ $movie->year ?? 'Anno' }}</p>
                <p><strong>Genere:</strong> {{ $movie->genre ?? 'Genere' }}</p>
                <p><strong>Regista:</strong> {{ $movie->director ?? 'Regista' }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>