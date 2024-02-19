<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    @foreach ($nombres as $index => $nombre)
        <div>
            <h2>"{{ $nombre }}"</h2>
            <img src="{{ $imagenes[$index] }}" alt=" {{ $nombre }}">
        </div>
    @endforeach
</body>
</html>
