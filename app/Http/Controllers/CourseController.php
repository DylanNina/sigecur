<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Course::where('estado', 1)->get();

        return view('cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'tipo' => 'required',
            'categoria' => 'required',
            'cupo' => 'nullable|integer'
        ]);

        Course::create([
            'nombre' => $request->nombre,
            'tipo' => $request->tipo,
            'categoria' => $request->categoria,
            'version' => $request->version,
            'turno' => $request->turno,
            'cupo' => $request->cupo,
            'requiere_aprobacion' => $request->requiere_aprobacion ?? 0,
            'estado' => 1
        ]);

        return redirect()->route('cursos.index')
            ->with('success', 'Curso creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $curso = Course::findOrFail($id);

        return view('cursos.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $curso = Course::findOrFail($id);

        $curso->update($request->all());

        return redirect()->route('cursos.index')
            ->with('success', 'Curso actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $curso = Course::findOrFail($id);

        $curso->update([
            'estado' => 0
        ]);

        return redirect()->back()
            ->with('success', 'Curso eliminado');
    }
}
