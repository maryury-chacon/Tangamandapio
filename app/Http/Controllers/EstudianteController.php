<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $estudiantes = Estudiante::search($request->search)->paginate(8);
        return view('estudiantes.estudiantes_index')->with('estudiantes', $estudiantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiantes.estudiantes_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "nombres" => "required|max:50",
            "apellidos" => "required|max:50",
            "identidad" => "required|max:15|min:15|unique:estudiantes,identidad,",
            "ciudad" => "required|max:20",
            "direccion" => "required|max:100",

        ], [
            "nombres.required" => "Se requiere ingresar los nombres del estudiante.",
            "nombres.min" => "Los nombres no debe ser minimo a 2 caracteres.",
            "nombres.max" => "Los nombres no debe ser máximo a 50 caracteres.",

            "apellidos.required" => "Se requiere ingresar los apellidos del estudiante.",
            "apellidos.max" => "Los apellidos no debe ser máximo a 50 caracteres.",

            "identidad.required" => "Se requiere el número de identidad del estudiante.",
            "identidad.max" => "La identidad no debe tener más de 13 caracteres.",
            "identidad.min" => "La identidad no debe tener menos de 13 caracteres.",
            "identidad.unique" => "La identidad ya ha sido registrada anteriormente.",

            "ciudad.required" => "Se requiere ingresar la ciudad de procedencia del estudiante.",
            "ciudad.max" => "La ciudad no debe tener más de 20 caracteres.",

            "direccion.required" => "Se requiere ingresar la dirección del estudiante.",
            "direccion.max" => "La dirección no debe tener más de 100 caracteres.",
        ]);

        $estudiante = new Estudiante();
        $estudiante->nombres = $request->input("nombres");
        $estudiante->apellidos = $request->input("apellidos");
        $estudiante->identidad = $request->input("identidad");
        $estudiante->ciudad = $request->input("ciudad");
        $estudiante->direccion = $request->input("direccion");
        $estudiante->save();
        return redirect()->route("estudiante.index")->with("exito", "Se creó exitosamente el estudiante");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiantes.estudiantes_show')->with('estudiante', $estudiante);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view("estudiantes.estudiantes_update")->with("estudiante", $estudiante);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "nombres" => "required|max:500",
            "apellidos" => "required|max:500",
            "identidad" => "required|max:15|unique:estudiantes,identidad," . $id,
            "ciudad" => "required|max:20",
            "direccion" => "required|max:100",

        ], [
            "nombres.required" => "Se requiere ingresar los nombres del estudiante.",
            "nombres.max" => "Los nombres no debe ser máximo a 50 caracteres.",

            "apellidos.required" => "Se requiere ingresar los apellidos del estudiante.",
            "apellidos.max" => "Los apellidos no debe ser máximo a 50 caracteres.",

            "identidad.required" => "Se requiere el número de identidad del estudiante.",
            "identidad.max" => "La identidad no debe tener más de 13 caracteres.",
            "identidad.min" => "La identidad no debe tener menos de 13 caracteres.",
            "identidad.unique" => "La identidad ya ha sido registrada anteriormente.",

            "ciudad.required" => "Se requiere ingresar la ciudad de procedencia del estudiante.",
            "ciudad.max" => "La ciudad no debe tener más de 20 caracteres.",

            "direccion.required" => "Se requiere ingresar la dirección del estudiante.",
            "direccion.max" => "La dirección no debe tener más de 100 caracteres.",
        ]);

        $estudiante = Estudiante::findOrFail($id);
        $estudiante->nombres = $request->input("nombres");
        $estudiante->apellidos = $request->input("apellidos");
        $estudiante->identidad = $request->input("identidad");
        $estudiante->ciudad = $request->input("ciudad");
        $estudiante->direccion = $request->input("direccion");
        $estudiante->save();

        return redirect()->route("estudiante.index")->with("exito", "los datos del estudiante fueron actualizados correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::findOrfail($id);
        $estudiante->delete();

        return redirect()->route("estudiante.index")->with("error", "el estudiante fue eliminado correctamente");
    }
}
