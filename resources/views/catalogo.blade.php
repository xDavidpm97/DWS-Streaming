<!DOCTYPE html>
<html lang="en">
<head>
    <title>Catálogo - DWSStreaming</title>
    <link rel="stylesheet" href="{{ asset('css/catalogo.css') }}">
</head>
<body>
    <h1>Catálogo de Vídeos</h1>
    <nav>
        <a href="{{ route('inicio') }}">Inicio</a> 
     
    </nav>
    <ul>
        @foreach ($videos as $video)
            <li>
                <strong>{{ $video['titulo'] }}</strong> - {{ $video['tipo'] }}<br>
                Edad recomendada: {{ $video['edad_recomendada'] }}<br>
                {{ $video['descripcion'] }}
            </li>
        @endforeach
    </ul>
</body>
</html>
