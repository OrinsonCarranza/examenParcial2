@extends('layouts.app')

@section('content')
    <h1>Editar Estudiante</h1>
    <form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $estudiante->nombre }}" required>
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" value="{{ $estudiante->apellido }}" required>
        <br>
        <label for="curso">Curso:</label>
        <input type="text" name="curso" id="curso" value="{{ $estudiante->curso }}" required>
        <br>
        <label for="nota1">Nota 1:</label>
        <input type="number" step="0.01" name="nota1" id="nota1" value="{{ $estudiante->nota1 }}" required>
        <br>
        <label for="nota2">Nota 2:</label>
        <input type="number" step="0.01" name="nota2" id="nota2" value="{{ $estudiante->nota2 }}" required>
        <br>
        <label for="fecha_registro">Fecha de Registro:</label>
        <input type="date" name="fecha_registro" id="fecha_registro" value="{{ $estudiante->fecha_registro }}" required>
        <br>
        <label for="condicion">Condición:</label>
        <input type="text" name="condicion" id="condicion" value="{{ $estudiante->condicion }}" required>
        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection
