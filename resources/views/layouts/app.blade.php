<!DOCTYPE html>
<html>
<head>
    <title>Gestión de Estudiantes</title>
    <style>
        .nav {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }
        .nav a {
            text-decoration: none;
            color: blue;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="nav">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/estudiantes/create') }}">Ingreso</a>
        <a href="{{ url('/estudiantes') }}">Listado</a>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html> 
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Gestión de Estudiantes</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="nav">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/estudiantes/create') }}">Ingreso</a>
        <a href="{{ url('/estudiantes') }}">Listado</a>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html> -->
