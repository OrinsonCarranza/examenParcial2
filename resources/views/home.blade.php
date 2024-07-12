<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
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
    <h1>Examen Unidad II</h1>
</body>
</html>
