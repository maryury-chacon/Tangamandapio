<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          //$estudiantes = Estudiante::search($request->search)->paginate(10);
          $profesores = Profesor::search($request->search)->paginate(8);
          return view('profesores.profesores_index')->with('profesores', $profesores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesores.profesores_create');
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
            "profesion" => "required|max:200",
            "fecha_entrada" => "required",
            "activo" => "required"
        ], [
            "nombres.required" => "Se requiere ingresar los nombres del profesor.",
            "nombres.max" => "Los nombres no debe ser máximo a 50 caracteres.",

            "apellidos.required" => "Se requiere ingresar los apellidos del profesor.",
            "apellidos.max" => "Los apellidos no debe ser máximo a 50 caracteres.",


            "profesion.required" => "Se requiere ingresar la profesion del profesor.",
            "profesion.max" => "La profesion no debe tener más de 200 caracteres.",

            "fecha_entrada.required" => "Se requiere ingresar la fecha en el formato AAAA-MM-DD.",
            "fecha_entrada.max" => "La profesion no debe tener más de 100 caracteres.",

            "activo.required" => "Se requiere seleccionar el estado del profesor."
        ]);

        $profesor = new Profesor();
        $profesor->nombres = $request->input("nombres");
        $profesor->apellidos = $request->input("apellidos");
        $profesor->profesion = $request->input("profesion");
        $profesor->fecha_entrada = $request->input("fecha_entrada");
        $profesor->activo = $request->input("activo");
        $profesor->save();
        return redirect()->route("profesor.index")->with("exito", "Se creó exitosamente el profesor");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profesor = Profesor::findOrFail($id);
        return view('profesores.profesores_show')->with('profesor', $profesor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesor = Profesor::findOrFail($id);
        return view("profesores.profesores_update")->with("profesor", $profesor);
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
            "nombres" => "required|max:50",
            "apellidos" => "required|max:50",
            "profesion" => "required|max:200",
            "fecha_entrada" => "required",
            "activo" => "required"
        ], [
            "nombres.required" => "Se requiere ingresar los nombres del profesor.",
            "nombres.max" => "Los nombres no debe ser máximo a 50 caracteres.",

            "apellidos.required" => "Se requiere ingresar los apellidos del profesor.",
            "apellidos.max" => "Los apellidos no debe ser máximo a 50 caracteres.",

            "profesion.required" => "Se requiere ingresar la profesion del profesor.",
            "profesion.max" => "La profesion no debe tener más de 200 caracteres.",

            "fecha_entrada.required" => "Se requiere ingresar la fecha en el formato AAAA-MM-DD.",
            "fecha_entrada.max" => "La profesion no debe tener más de 100 caracteres.",

            "activo.required" => "Se requiere seleccionar el estado del profesor.",
        ]);

        $profesor = Profesor::findOrFail($id);
        $profesor->nombres = $request->input("nombres");
        $profesor->apellidos = $request->input("apellidos");
        $profesor->profesion = $request->input("profesion");
        $profesor->fecha_entrada = $request->input("fecha_entrada");
        $profesor->activo = $request->input("activo");
        $profesor->save();

        return redirect()->route("profesor.index")->with("exito", "los datos del profesor fueron actualizados correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesor = Profesor::findOrfail($id);
        $profesor->delete();

        return redirect()->route("profesor.index")->with("error", "el profesor fue eliminado correctamente");
    }
}
