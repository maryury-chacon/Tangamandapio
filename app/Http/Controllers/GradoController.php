<?php

namespace App\Http\Controllers;
use App\Models\Grado;
use App\Models\Grados_Profesion;
use Illuminate\Http\Request;

class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $grado = Grado::search($request->search)->paginate(8);
        return view('grados.grado_index')->with('grados', $grado);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grados.grado_create');
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
            "jornada" => "required|max:50",
            "seccion" => "required|max:1",
            "aula" => "required|max:4",
        ], [
            "jornada.required" => "Se requiere ingresar lo jornada del grado.",
            "jornada.max" => "Los jornada no debe ser máximo a 50 caracteres.",

            "seccion.required" => "Se requiere ingresar los seccion del grado.",
            "seccion.max" => "Los seccion no debe ser máximo a 50 caracteres.",

            "aula.required" => "Se requiere ingresar la aula de procedencia del grado.",
            "aula.max" => "La aula no debe tener más de 50 caracteres.",
            ]);

        $grado = new Grado();
        $grado->jornada = $request->input("jornada");
        $grado->seccion = $request->input("seccion");
        $grado->aula = $request->input("aula");
        $grado->save();
        return redirect()->route("grado.index")->with("exito", "Se creó exitosamente el grado");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grado = Grado::findOrFail($id);
        return view('grados.grado_show')->with('grado', $grado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grado = Grado::findOrFail($id);
        return view("grados.grado_update")->with("grado", $grado);
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
            "jornada" => "required|max:50",
            "seccion" => "required",
            "aula" => "required|max:4",
        ], [
            "jornada.required" => "Se requiere ingresar las jornada de los grados.",
            "jornada.max" => "Las jornada no debe ser máximo a 50 caracteres.",

            "seccion.required" => "Se requiere ingresar la seccion de los grado.",
            "seccion.max" => "La seccion no debe ser máximo a 50 caracteres.",

            "aula.required" => "Se requiere ingresar el aula del grado.",
            "aula.max" => "El aula no debe tener más de 100 caracteres.",
        ]);

        $grado = Grado::findOrFail($id);
        $grado->jornada = $request->input("jornada");
        $grado->seccion = $request->input("seccion");
        $grado->aula= $request->input("aula");
        $grado->save();

        return redirect()->route("grado.index")->with("exito", "los datos del grado fueron actualizados correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {

        $grado = Grado::findOrfail($id);
        $variable = Grados_Profesion::where("codigo_grado", "=", $id)->get();
        if ($variable->count() > 0) {
            return redirect()->route("grado.index")->with("error", "No se puede eliminar el grado porque ya está asignado a un profesor");
        }

        $grado->delete();
        return redirect()->route("grado.index")->with("error", "el grado fue eliminado correctamente");
    }

}
