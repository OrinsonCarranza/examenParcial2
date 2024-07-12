@extends('layouts.app')

@section('content')
    <h1>Agregar Estudiante</h1>
    <form action="{{ route('estudiantes.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required>
        <br>
        <label for="curso">Curso:</label>
        <input type="text" name="curso" id="curso" required>
        <br>
        <label for="nota1">Nota 1:</label>
        <input type="number" step="0.01" name="nota1" id="nota1" required>
        <br>
        <label for="nota2">Nota 2:</label>
        <input type="number" step="0.01" name="nota2" id="nota2" required>
        <br>
        <label for="fecha_registro">Fecha de Registro:</label>
        <input type="date" name="fecha_registro" id="fecha_registro" required>
        <br>
        <label for="condicion">Condición:</label>
        <input type="text" name="condicion" id="condicion" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
@endsection