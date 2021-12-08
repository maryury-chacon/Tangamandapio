@extends('layouts.app')
@section('title', 'Estudiantes')
@section('content')

    @if(session('exito'))
        <div style="margin-top: 15px">
            <div class="alert alert-dismissible fade show" role="alert" style="margin: 0 auto; width: 40rem; background:  #151E6D; color: #FFFFFF">
                <strong style="color: #e2e8f0">Importante: </strong>{{session('exito')}}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    @if(session('error'))
        <div style="margin-top: 15px">
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin: 0 auto; width: 40rem">
                <strong>Importante: </strong>{{session('error')}}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    <div class="container " style="margin-top: 15px" >
        <div class="row">
            @if($estudiantes->count())
                <div class="table-responsive-sm -mr-2 col-md-10"
                     style="text-align: center; margin: 0 auto; margin-bottom: 10px;margin-top: 20px;">
                    <table name="tabla_prove"  class="table table-responsive table-bordered">
                        <tr>
                            <thead style="background:  #151E6D; color: #ffffff">
                            <th colspan="8">Estudiantes <a style="color: white;margin-left: 720px; text-align: center;" href="{{route("estudiante.create")}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-plus-square-dotted" viewBox="0 0 16 16">
                                        <path d="M2.5 0c-.166 0-.33.016-.487.048l.194.98A1.51 1.51 0 0 1 2.5 1h.458V0H2.5zm2.292 0h-.917v1h.917V0zm1.833 0h-.917v1h.917V0zm1.833 0h-.916v1h.916V0zm1.834 0h-.917v1h.917V0zm1.833 0h-.917v1h.917V0zM13.5 0h-.458v1h.458c.1 0 .199.01.293.029l.194-.981A2.51 2.51 0 0 0 13.5 0zm2.079 1.11a2.511 2.511 0 0 0-.69-.689l-.556.831c.164.11.305.251.415.415l.83-.556zM1.11.421a2.511 2.511 0 0 0-.689.69l.831.556c.11-.164.251-.305.415-.415L1.11.422zM16 2.5c0-.166-.016-.33-.048-.487l-.98.194c.018.094.028.192.028.293v.458h1V2.5zM.048 2.013A2.51 2.51 0 0 0 0 2.5v.458h1V2.5c0-.1.01-.199.029-.293l-.981-.194zM0 3.875v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zM0 5.708v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zM0 7.542v.916h1v-.916H0zm15 .916h1v-.916h-1v.916zM0 9.375v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zm-16 .916v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zm-16 .917v.458c0 .166.016.33.048.487l.98-.194A1.51 1.51 0 0 1 1 13.5v-.458H0zm16 .458v-.458h-1v.458c0 .1-.01.199-.029.293l.981.194c.032-.158.048-.32.048-.487zM.421 14.89c.183.272.417.506.69.689l.556-.831a1.51 1.51 0 0 1-.415-.415l-.83.556zm14.469.689c.272-.183.506-.417.689-.69l-.831-.556c-.11.164-.251.305-.415.415l.556.83zm-12.877.373c.158.032.32.048.487.048h.458v-1H2.5c-.1 0-.199-.01-.293-.029l-.194.981zM13.5 16c.166 0 .33-.016.487-.048l-.194-.98A1.51 1.51 0 0 1 13.5 15h-.458v1h.458zm-9.625 0h.917v-1h-.917v1zm1.833 0h.917v-1h-.917v1zm1.834-1v1h.916v-1h-.916zm1.833 1h.917v-1h-.917v1zm1.833 0h.917v-1h-.917v1zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                                    </svg>
                                </a>
                            </th>
                            </thead>
                        </tr>
                        <tr>
                            <thead style="background:  #151E6D; color: #ffffff">
                            <th scope="col">Codigo</th>
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">Identidad</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Visualizar</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                            </thead>
                        </tr>
                        <tbody>
                        @foreach($estudiantes as $item=>$estudiante)
                            <tr id="resultados">
                                <td style="font: caption; text-align: center">{{$estudiante->id}}</td>
                                <td style="font: caption; text-align: left">{{$estudiante->nombres}} {{$estudiante->apellidos}}</td>
                                <td style="font: caption; text-align: center">{{$estudiante->identidad}}</td>
                                <td style="font: caption; text-align: left">{{$estudiante->ciudad}}</td>
                                <td style="font: caption; text-align: left">{{$estudiante->direccion}}</td>
                                <td style="text-align: center">
                                    <a class="btn btn-" style="background: #151E6D" href="{{route("estudiante.show",["id"=>$estudiante->id])}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=" #FFFFFF" class="bi bi-layers-fill" viewBox="0 0 16 16">
                                            <path d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882l7.5-4z"/>
                                            <path d="m2.125 8.567-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0l-5.17-2.756z"/>
                                        </svg></a>
                                </td>

                                <td style="text-align: center">
                                    <a class="btn btn" style="background: #00796B" href="{{route("estudiante.edit",["id"=>$estudiante->id])}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=" #FFFFFF" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg></a>
                                </td>

                                <td style="text-align: center">
                                    <a type="button" class="btn btn" style="background: #C62828" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{$estudiante->id}}" onclick="recibir('{{$estudiante->id}}')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill=" #FFFFFF" class="bi bi-archive-fill" viewBox="0 0 16 16">
                                            <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <div class="alert alert d-flex align-items-center" role="alert" style="margin-top: 15px; background: #C62828; color: #FFFFFF">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div>
                                No hay estudiantes agregados aún, presiona el botón de agregar.
                            </div>
                        </div>
                    @endif
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color:#C62828; color: white">
                                <h5 class="modal-title" id="exampleModalLabel">ELIMINAR ESTUDIANTE</h5>
                                <button type="button"  class="btn-close" style="color: #FFFFFF" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>¿Está de acuerdo con eliminar el estudiante seleccionado?</p>
                            </div>
                            <form name="formulario_eliminar" action="" method="POST">
                                <div class="modal-footer">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn" style="background:#C62828; color: #FFFFFF " value="Confirmar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            <center>
                <div class="col-md-5" style="text-align: center; margin: 0 auto; margin-bottom: 10px; margin-top: 12px;">
                    {{ $estudiantes->links('pagination::bootstrap-4') }}
                </div>
            </center>
        </div>
    </div>

    <script>
        function recibir(numero) {
            var id = numero;
            document.formulario_eliminar.action = "/estudiantes/" + id + "/destroy";
        }
    </script>

@endsection
@yield('@Copyrigth Tangamandapio')
