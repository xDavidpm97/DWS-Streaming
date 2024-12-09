<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Panel - DWSStreaming</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <h1>Panel de Administración</h1>
    <nav>
        <a href="{{ route('inicio') }}">Inicio</a> |
        <a href="{{ route('catalogo') }}">Catálogo</a> |
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </nav>

    <h2>Añadir Nuevo Vídeo</h2>
    <form action="{{ route('admin.addVideo') }}" method="POST">
        @csrf
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br>
        <label for="tipo">Tipo:</label>
        <input type="text" id="tipo" name="tipo" required><br>
        <label for="edad_recomendada">Edad Recomendada:</label>
        <input type="text" id="edad_recomendada" name="edad_recomendada" required><br>
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion"></textarea><br>
        <button type="submit">Añadir Vídeo</button>
    </form>

    <h2>Listado de Vídeos</h2>
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
