<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio - DWSStreaming</title>
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
</head>
<body>
    <h1>Bienvenido a DWSStreaming</h1>
    <nav>
        <a href="{{ route('inicio') }}">Inicio</a> |
        <a href="{{ route('catalogo') }}">Catálogo</a> |
        @if(session('user') === 'admin')
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" class="btn">Logout</button>
</form>

        @else
           <!-- <a href="#login">Login</a> -->
        @endif
    </nav>

    <div id="login">
        <h2>Login de Administrador</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required><br>
            <button type="submit">Iniciar</button>
        </form>
        @if($errors->any())
            <p style="color: red;">{{ $errors->first() }}</p>
        @endif
    </div>
</body>
</html>
