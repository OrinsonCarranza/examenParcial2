<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create()
    {
        return view('estudiantes.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255', 
            'curso' => 'required',
            'nota1' => 'required|numeric',
            'nota2' => 'required|numeric',
            'fecha_registro' => 'required|date',
            'condicion' => 'required',
        ]);
    
        $promedio = ($request->nota1 + $request->nota2) / 2;
    
        Estudiante::create([
            'nombre' => $validatedData['nombre'],
            'apellido' => $validatedData['apellido'], 
            'curso' => $validatedData['curso'],
            'nota1' => $validatedData['nota1'],
            'nota2' => $validatedData['nota2'],
            'promedio' => $promedio,
            'fecha_registro' => $validatedData['fecha_registro'],
            'condicion' => $validatedData['condicion'],
        ]);
    
        return redirect('/estudiantes')->with('success', 'Estudiante guardado con éxito');
    }
    
    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiantes.edit', compact('estudiante'));
    }

    public function destroy($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();

        return redirect('/estudiantes')->with('success', 'Estudiante eliminado con éxito');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255', 
            'curso' => 'required',
            'nota1' => 'required|numeric',
            'nota2' => 'required|numeric',
            'fecha_registro' => 'required|date',
            'condicion' => 'required',
        ]);
    
        $promedio = ($request->nota1 + $request->nota2) / 2;
    
        Estudiante::whereId($id)->update([
            'nombre' => $validatedData['nombre'],
            'apellido' => $validatedData['apellido'], 
            'curso' => $validatedData['curso'],
            'nota1' => $validatedData['nota1'],
            'nota2' => $validatedData['nota2'],
            'promedio' => $promedio,
            'fecha_registro' => $validatedData['fecha_registro'],
            'condicion' => $validatedData['condicion'],
        ]);
    
        return redirect('/estudiantes')->with('success', 'Estudiante actualizado con éxito');
    }
    
}
