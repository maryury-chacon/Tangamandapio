<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\GradoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/estudiantes", [EstudianteController::class, "index"])
    ->name("estudiante.index");

Route::get("/estudiantes/{id}", [EstudianteController::class, "show"])
    ->name("estudiante.show")->where('id', '[0-9]+');

Route::get("/estudiantes/create", [EstudianteController::class, "create"])
    ->name("estudiante.create");

Route::post("/estudiantes/create", [EstudianteController::class, "store"])
    ->name("estudiante.create");

Route::get("/estudiantes/{id}/edit", [EstudianteController::class, "edit"])
    ->name("estudiante.edit")->where('id', '[0-9]+');

Route::put("/estudiantes/{id}/edit", [EstudianteController::class, "update"])
    ->name("estudiante.edit")->where('id', '[0-9]+');

Route::delete('/estudiantes/{id}/destroy', [EstudianteController::class, "destroy"])
    ->name("estudiante.destroy");

Route::get("/estudiantes/busqueda", [EstudianteController::class, "search"])
    ->name("estudiante.search");

Route::get("/estudiantes/busqueda", [EstudianteController::class, "buscarEstudiante"])
    ->name("estudiante.buscar");

/*******RUTAS DE PROFESORES***********/

Route::get("/profesores", [ProfesorController::class, "index"])
    ->name("profesor.index");

Route::get("/profesores/{id}", [ProfesorController::class, "show"])
    ->name("profesor.show")->where('id', '[0-9]+');

Route::get("/profesores/create", [ProfesorController::class, "create"])
    ->name("profesor.create");

Route::post("/profesores/create", [ProfesorController::class, "store"])
    ->name("profesor.create");

Route::get("/profesores/{id}/edit", [ProfesorController::class, "edit"])
    ->name("profesor.edit")->where('id', '[0-9]+');

Route::put("/profesores/{id}/edit", [ProfesorController::class, "update"])
    ->name("profesor.edit")->where('id', '[0-9]+');

Route::delete('/profesores/{id}/destroy', [ProfesorController::class, "destroy"])
    ->name("profesor.destroy");

Route::get("/profesores/busqueda", [ProfesorController::class, "search"])
    ->name("profesor.search");

Route::get("/profesores/busqueda", [ProfesorController::class, "buscarProfesor"])
    ->name("profesor.buscar");

    /*******RUTAS DE GRADOS***********/

Route::get("/grados", [GradoController::class, "index"])
->name("grado.index");

Route::get("/grados/{id}", [GradoController::class, "show"])
->name("grado.show")->where('id', '[0-9]+');

Route::get("/grados/create", [GradoController::class, "create"])
->name("grado.create");

Route::post("/grados/create", [GradoController::class, "store"])
->name("grado.create");

Route::get("/grados/{id}/edit", [GradoController::class, "edit"])
    ->name("grado.edit")->where('id', '[0-9]+');

Route::put("/grados/{id}/edit", [GradoController::class, "update"])
    ->name("grado.edit")->where('id', '[0-9]+');


Route::delete('/grados/{id}/destroy', [GradoController::class, "destroy"])
->name("grado.destroy");

Route::get("/grados/busqueda", [GradoController::class, "search"])
->name("grado.search");

Route::get("/grados/busqueda", [GradoController::class, "buscarGrado"])
->name("grado.buscar");
