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
                                REGISTRAR GRADO
                            </h2>
                            <hr style="border-top: 2px solid white; border-bottom: 2px solid white; border-left:none; border-right:none; height: 2px; ">


                            <div class="col-md-11" style="margin: 0 auto">
                                <form id="form" style="margin: 0 auto" enctype="multipart/form-data"
                                      action="{{route("grado.create")}}"
                                      method="post">
                                    @csrf

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                        <label style="color: white"><strong>Jornada:</strong></label>
                                        <select class="form-select" aria-label=""
                                                name="jornada"
                                                id="jornada"
                                                value="{{old("jornada")}}">
                                            <option selected value ="Matutina">Matutina</option>
                                            <option value="Vespertina">Vespertina</option>
                                            <option value="Nocturna">Nocturna</option>
                                        </select>
                                        @error('jornada')
                                        <span class="invalid-feedback" role="alert">
                                                <strong style="color: white">{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                        <label style="color: white"><strong>Seccion:</strong></label>
                                        <select class="form-select" aria-label=""
                                                name="seccion"
                                                id="seccion"
                                                value="{{old("seccion")}}">
                                            <option selected value ="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                            <option value="F">F</option>
                                        </select>
                                        @error('seccion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color: #FFFFFF">{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                            <label style="color: white"><strong>Aula:</strong></label>
                                            <input class="form-control"
                                                   pattern="[AL]{2}[0-9]{2}"
                                                   required
                                                   value="{{old("aula")}}"
                                                   minlength="4"
                                                   maxlength="4"
                                                   id="aula"
                                                   name="aula">
                                        @error('aula')
                                        <span class="invalid-feedback" role="alert">
                                            <strong style="color: #FFFFFF">{{ $message }}</strong>
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

        <script>
            function valNumero(evt) {
                var code = (evt.which) ? evt.which : evt.keyCode;
                if (code == 8) {
                    return true;
                } else if (code >= 48 && code <= 57) {
                    return true;
                } else {
                    return false;
                }
            }

            function f_letra(evt) {
                var code = (evt.which) ? evt.which : evt.keyCode;
                if (code == 8 || code == 13) {
                    return false;
                } else if (code >= 65 && code <= 70) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>

@endsection
@yield('@Copyrigth ')
