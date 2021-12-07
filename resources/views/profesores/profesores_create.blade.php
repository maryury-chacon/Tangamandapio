@extends('layouts.app')
@section('title', 'Profesor')
@section('content')

    <div class="container">
        <div class="row" style="margin-top: 15px">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"
                 style="margin: 0 auto">

                <div class="col" style="margin: 0 auto">
                    <ul class="list-group" style="width: 33rem; margin: 0 auto">
                        <li class="list-group-item" style="background-color:#1595eb">
                           <h2 style="color:#ffffff; text-align: center">
                                REGISTRAR PROFESOR
                            </h2>
                            <hr style="border-top: 2px solid white; border-bottom: 2px solid white; border-left:none; border-right:none; height: 2px; ">


                            <div class="col-md-11" style="margin: 0 auto">
                                <form id="form_proveedores" style="margin: 0 auto" enctype="multipart/form-data"
                                      action="{{route("profesor.create")}}"
                                      method="post">
                                    @csrf

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                            <label style="color: white"><strong>Nombres:</strong></label>
                                            <input class="form-control  @error('nombres') is-invalid @enderror"
                                                   placeholder=""
                                                   onkeypress="return f_letra(event);"
                                                   pattern="[A-Za-záéíóúñÑ ]{2,50}"
                                                   required
                                                   value="{{old("nombres")}}"
                                                   maxlength="50" name="nombres" id="nombres">
                                            @error('nombres')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: white">{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                        <label style="color: white"><strong>Apellidos:</strong></label>
                                        <input class="form-control  @error('apellidos') is-invalid @enderror"
                                               placeholder=""
                                               onkeypress="return f_letra(event);"
                                               pattern="[A-Za-záéíóúñÑ ]{2,50}"
                                               required
                                               value="{{old("apellidos")}}"
                                               maxlength="50" name="apellidos" id="apellidos">
                                        @error('apellidos')
                                        <span class="invalid-feedback" role="alert">
                                                <strong style="color: white">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                            <label style="color: white"><strong>Profesion:</strong></label>
                                            <input class="form-control"
                                                      required
                                                      value="{{old("profesion")}}"
                                                      maxlength="50"
                                                      id="profesion" name="profesion"
                                                      
                                            ></input>
                                            @error('apellidos')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: white">{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>


                                    <!-- <div class="d-grid gap-2" style="margin: 0 auto">
                                        <label style="color: white"><strong>Identidad:</strong></label>
                                        <input class="form-control  @error('identidad') is-invalid @enderror"
                                               placeholder=""
                                               required
                                               value="{{old("identidad")}}"
                                               maxlength="50" name="identidad" id="identidad">
                                        @error('identidad')
                                        <span class="invalid-feedback" role="alert">
                                                <strong style="color: white">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> -->

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                        <label style="color: white"><strong>Estado:</strong></label>
                                            <select class="form-select" aria-label="" name="estado" id="estado" value="{{old("activo")}}">
                                            <option selected value ="Seleccionar">Seleccionar..</option>
                                                <option value ="Activo">A</option>
                                                <option value="inactivo">I</option>
                                                
                                            </select>
                                        @error('ciudad')
                                        <span class="invalid-feedback" role="alert">
                                                <strong style="color: white">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                    <label style="color: white"><strong>Fecha:</strong></label>
                                    <input size="16" type="" placeholder="aa/mm/dd" class="form-control" id="fecha" name="fecha"  value="{{old("fecha_entrada")}}">
                                    
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
                if (code == 8 || code == 32) {
                    return true;
                } else if (code >= 65) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>

@endsection
@yield('@Copyrigth ')
