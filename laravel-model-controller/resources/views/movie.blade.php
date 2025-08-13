<!DOCTYPE html>
<html>
<head>
    <title>Movies</title>
</head>
<body>
    <h1>Lista Film</h1>
    <div style="display: flex; flex-wrap: wrap; gap: 16px;">
        @foreach($movies as $movie)
            <div style="border: 1px solid #ccc; border-radius: 8px; padding: 16px; width: 220px; box-shadow: 2px 2px 8px #eee; background: #fafafa;">
                <h3>{{ $movie->title }}</h3>
                <p><strong>Anno:</strong> {{ $movie->date ?? 'date' }}</p>
                <p><strong>Titolo:</strong> {{ $movie->title ?? 'title' }}</p>
                <p><strong>Titolo Originale:</strong> {{ $movie->original_title ?? 'original_title' }}</p>
                <p><strong>Nazionalità:</strong> {{ $movie->nationality ?? 'nationality' }}</p>

            </div>
        @endforeach
    </div>
</body>
</html>