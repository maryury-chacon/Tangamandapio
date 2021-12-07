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
                                <form id="form_proveedores" style="margin: 0 auto" enctype="multipart/form-data"
                                      action="{{route("grado.edit",["id"=>$grado->id])}}"
                                      method="post">
                                    @csrf

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                            <label style="color: white"><strong>Jornada:</strong></label>
                                            <input class="form-control  @error('jornada') is-invalid @enderror"
                                                   placeholder=""
                                                   onkeypress="return f_letra(event);"
                                                   pattern="[A-Za-záéíóúñÑ ]{2,50}"
                                                   required
                                                   @if(old("jornada"))
                                               value="{{old("jornada")}}"
                                               @else
                                               value="{{$grado->jornada}}"
                                               @endif
                                                   maxlength="50" name="jornada" id="jornada">
                                            @error('jornada')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: white">{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                        <label style="color: white"><strong>Sección:</strong></label>
                                        <input class="form-control  @error('seccion') is-invalid @enderror"
                                               placeholder=""
                                               onkeypress="return f_letra(event);"
                                               pattern="[A-Za-záéíóúñÑ ]{2,50}"
                                               required
                                               @if(old("seccion"))
                                               value="{{old("seccion")}}"
                                               @else
                                               value="{{$profesor->seccion}}"
                                               @endif
                                               maxlength="50" name="seccion" id="seccion">
                                        @error('seccion')
                                        <span class="invalid-feedback" role="alert">
                                                <strong style="color: white">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                            <label style="color: white"><strong>Aula:</strong></label>
                                            <input class="form-control"
                                                      required
                                                      @if(old("aula"))
                                                      value="{{old("aula")}}"
                                                      @else
                                                      value="{{$profesor->aula}}"
                                                     @endif
                                                      maxlength="50"
                                                      id="aula" name="aula"
                                                      
                                            ></input>
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
