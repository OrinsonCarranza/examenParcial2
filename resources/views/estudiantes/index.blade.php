@extends('layouts.app')

@section('content')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>

    <h1>Lista de Estudiantes</h1>
    <a href="{{ route('estudiantes.create') }}">Agregar Estudiante</a>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Curso</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Promedio</th>
                <th>Condición</th>
                <th>Creado</th>
                <th>Actualizado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante->id }}</td>
                    <td>{{ $estudiante->apellido }}</td>
                    <td>{{ $estudiante->nombre }}</td>
                    <td>{{ $estudiante->curso }}</td>
                    <td>{{ $estudiante->nota1 }}</td>
                    <td>{{ $estudiante->nota2 }}</td>
                    <td>{{ $estudiante->promedio }}</td>
                    <td>{{ $estudiante->condicion }}</td>
                    <td>{{ $estudiante->created_at }}</td>
                    <td>{{ $estudiante->updated_at }}</td>
                    <td>
                        <a href="{{ route('estudiantes.edit', $estudiante->id) }}">Editar</a>
                        <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
