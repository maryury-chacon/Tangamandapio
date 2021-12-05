<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

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
