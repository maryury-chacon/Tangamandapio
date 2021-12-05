@extends('layouts.app')
@section('title', 'Estudiante')
@section('content')
    <div class="container">
        <div class="row" style="margin-top: 15px">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"
                 style="margin: 0 auto">

                <div class="col" style="margin: 0 auto">
                    <ul class="list-group" style="width: 33rem; margin: 0 auto">
                        <li class="list-group-item" style="background-color:#151E6D">
                            <h2 style="color:#ffffff; text-align: center">
                                ACTUALIZAR ESTUDIANTE
                            </h2>
                            <hr style="border-top: 2px solid white; border-bottom: 2px solid white; border-left:none; border-right:none; height: 2px; ">


                            <div class="col-md-11" style="margin: 0 auto">
                                <form id="form_proveedores" style="margin: 0 auto" enctype="multipart/form-data"
                                      action="{{route("estudiante.edit",["id"=>$estudiante->id])}}"
                                      method="post">
                                    @method("PUT")
                                    @csrf

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                        <label style="color: white"><strong>Nombres:</strong></label>
                                        <input class="form-control  @error('nombres') is-invalid @enderror"
                                               placeholder=""
                                               onkeypress="return valLetra(event);"
                                               pattern="[A-Za-záéíóúñÑ ]{2,50}"
                                               required
                                               @if(old("nombres"))
                                               value="{{old("nombres")}}"
                                               @else
                                               value="{{$estudiante->nombres}}"
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
                                               onkeypress="return valLetra(event);"
                                               pattern="[A-Za-záéíóúñÑ ]{2,50}"
                                               required
                                               @if(old("apellidos"))
                                               value="{{old("apellidos")}}"
                                               @else
                                               value="{{$estudiante->apellidos}}"
                                               @endif
                                               maxlength="50" name="apellidos" id="apellidos">
                                        @error('apellidos')
                                        <span class="invalid-feedback" role="alert">
                                        <strong style="color: white">{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                        <label style="color: white"><strong>Identidad:</strong></label>
                                        <input class="form-control @error('identidad') is-invalid @enderror"
                                               pattern="[0-9]{4}-[0-9]{4}-[0-9]{5}"
                                               placeholder=""
                                               required
                                               @if(old("identidad"))
                                               value="{{old("identidad")}}"
                                               @else
                                               value="{{$estudiante->identidad}}"
                                               @endif
                                               maxlength="15"
                                               name="identidad" id="identidad">
                                        @error('identidad')
                                        <span class="invalid-feedback" role="alert">
                                        <strong style="color: white">{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>



                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                        <label style="color: white"><strong>Ciudad:</strong></label>
                                        <select name="ciudad" id="ciudad">
                                            <option selected value ="Danlí">Danlí</option>
                                            <option value="Morocelí">Morocelí</option>
                                            <option value="El Paraíso">El Paraíso</option>
                                            <option value="Yauyupe">Yauyupe</option>
                                            <option value="Yuscarán">Yuscarán</option>
                                            <option value="Alauca">Alauca</option>
                                            <option value="Güinope">Güinope</option>
                                            <option value="Jacaleapa">Jacaleapa</option>
                                            <option value="Liure">Liure</option>
                                            <option value="Soledad">Soledad</option>
                                            <option value="Oropolí">Oropolí</option>
                                            <option value="Potrerillos">Potrerillos</option>
                                            <option value="San Antonio de Flores">San Antonio de Flores</option>
                                            <option value="San Lucas">San Lucas</option>
                                            <option value="San Matías">San Matías</option>
                                            <option value="Teupasenti">Teupasenti</option>
                                            <option value="Trojes">Trojes</option>
                                            <option value="Texiguat">Texiguat</option>
                                            <option value="Vado Ancho">Vado Ancho</option>
                                        </select>
                                        @error('ciudad')
                                        <span class="invalid-feedback" role="alert">
                                                <strong style="color: white">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="d-grid gap-2" style="margin: 0 auto">
                                        <label style="color: white"><strong>Dirección:</strong></label>
                                        <textarea class="form-control  @error('direccion') is-invalid @enderror"
                                               placeholder=""
                                               onkeypress="return valLetra(event);"
                                               required
                                               maxlength="100" name="direccion" id="direccion" rows="3">@if(old("direccion")){{old("direccion")}}@else{{$estudiante->direccion}}@endif</textarea>
                                        @error('direccion')
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
            function valLetra(evt) {
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
