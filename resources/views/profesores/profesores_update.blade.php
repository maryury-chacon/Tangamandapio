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
                                ACTUALIZAR PROFESOR
                            </h2>
                            <hr style="border-top: 2px solid white; border-bottom: 2px solid white; border-left:none; border-right:none; height: 2px; ">


                            <div class="col-md-11" style="margin: 0 auto">
                                <form id="form_proveedores" style="margin: 0 auto"
                                      enctype="multipart/form-data"
                                      action="{{route("profesor.edit",["id"=>$profesor->id])}}"
                                      method="post">
                                    @method("PUT")
                                    @csrf

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                            <label style="color: white"><strong>Nombres:</strong></label>
                                            <input class="form-control  @error('nombres') is-invalid @enderror"
                                                   placeholder=""
                                                   onkeypress="return f_letra(event);"
                                                   pattern="[A-Za-záéíóúñÑ ]{2,50}"
                                                   required
                                                   @if(old("nombres"))
                                                   value="{{old("nombres")}}"
                                                   @else
                                                   value="{{$profesor->nombres}}"
                                                   @endif
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
                                               @if(old("apellidos"))
                                               value="{{old("apellidos")}}"
                                               @else
                                               value="{{$profesor->apellidos}}"
                                               @endif
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
                                                      @if(old("profesion"))
                                                      value="{{old("profesion")}}"
                                                      @else
                                                      value="{{$profesor->profesion}}"
                                                     @endif
                                                      maxlength="50"
                                                      id="profesion" name="profesion">
                                            @error('apellidos')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: white">{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                        <label style="color: white"><strong>Estado:</strong></label>
                                        <select name="activo" id="activo">
                                            <option value="A" {{ old('activo', $profesor->activo) == "A" ? 'selected' : '' }}>Activo</option>
                                            <option value="I" {{ old('activo', $profesor->activo) == "I" ? 'selected' : '' }}>Inactivo</option>
                                        </select>
                                        @error('activo')
                                        <span class="invalid-feedback" role="alert">
                                                <strong style="color: white">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                        <label style="color: white"><strong>Fecha de entrada:</strong></label>
                                        <input class="form-control  @error('fecha_entrada') is-invalid @enderror"
                                               placeholder=""
                                               type="date"
                                               data-date-start-date="+0d"
                                               pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"
                                               required
                                               @if(old("fecha_entrada"))
                                               value="{{old("fecha_entrada")}}"
                                               @else
                                               value="{{$profesor->fecha_entrada}}"
                                               @endif
                                               minlength="10"
                                               maxlength="10" name="fecha_entrada" id="fecha_entrada">
                                        @error('fecha_entrada')
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
