@extends('layouts.app')
@section('title', 'Grado')
@section('content')

    <div class="container">
        <div class="row" style="margin-top: 15px">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"
                 style="margin: 0 auto">

                <div class="col" style="margin: 0 auto">
                    <ul class="list-group" style="width: 33rem; margin: 0 auto">
                        <li class="list-group-item" style="background-color:#1595eb">
                           <h2 style="color:#ffffff; text-align: center">
                                ACTUALIZAR GRADO
                            </h2>
                            <hr style="border-top: 2px solid white; border-bottom: 2px solid white; border-left:none; border-right:none; height: 2px; ">

                            <div class="col-md-11" style="margin: 0 auto">
                                <form id="form" style="margin: 0 auto" enctype="multipart/form-data"
                                      action="{{route("grado.edit",["id"=>$grado->id])}}"
                                      method="post">
                                    @method("PUT")
                                    @csrf

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                        <label style="color: white"><strong>Jornada:</strong></label>
                                        <select name="jornada" id="jornada">
                                            <option value="Matutina" {{ old('jornada', $grado->jornada) == "Matutina" ? 'selected' : '' }}>Matutina</option>
                                            <option value="Vespertina" {{ old('jornada', $grado->jornada) == "Vespertina" ? 'selected' : '' }}>Vespertina</option>
                                            <option value="Nocturna" {{ old('jornada', $grado->jornada) == "Nocturna" ? 'selected' : '' }}>Nocturna</option>
                                        </select>
                                        @error('jornada')
                                        <span class="invalid-feedback" role="alert">
                                                <strong style="color: white">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                        <label style="color: white"><strong>Sección:</strong></label>
                                        <select name="seccion" id="seccion">
                                            <option value="A" {{ old('seccion', $grado->seccion) == "A" ? 'selected' : '' }}>A</option>
                                            <option value="B" {{ old('seccion', $grado->seccion) == "B" ? 'selected' : '' }}>B</option>
                                            <option value="C" {{ old('seccion', $grado->seccion) == "C" ? 'selected' : '' }}>C</option>
                                            <option value="D" {{ old('seccion', $grado->seccion) == "D" ? 'selected' : '' }}>D</option>
                                            <option value="E" {{ old('seccion', $grado->seccion) == "E" ? 'selected' : '' }}>E</option>
                                            <option value="F" {{ old('seccion', $grado->seccion) == "F" ? 'selected' : '' }}>F</option>
                                        </select>
                                        @error('seccion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color: white">{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                            <label style="color: white"><strong>Aula:</strong></label>
                                            <input class="form-control"
                                                   pattern="[AL]{2}[0-9]{2}"
                                                   required
                                                   @if(old("aula"))
                                                   value="{{old("aula")}}"
                                                   @else
                                                   value="{{$grado->aula}}"
                                                   @endif
                                                   maxlength="50"
                                                   id="aula" name="aula">
                                            @error('aula')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: white">{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    <br>
                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                        <button id="btnRegister" class="btn btn-primary">Guardar</button>
                                    </div>
                                    <br>
                                </form>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
@endsection
@yield('@Copyrigth ')
