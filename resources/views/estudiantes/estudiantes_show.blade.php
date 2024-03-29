@extends('layouts.app')
@section('title', 'Estudiante')
@section('content')
    <div class="container">
        <div>
            <div class="card" style="border-style: none!important; margin-top: 25px">
                <div class="container" style="border-style: none!important; background-color: #151E6D; border-radius: 5px; width: 42rem">
                    <li class="list-group-item" style="border-style: none!important; width: 40rem; margin: 0 auto; background: #151E6D" >
                        <h2 style="color:#ffffff; text-align: center">
                            ESTUDIANTE
                        </h2>
                    </li>

                    <hr style="border-top: 2px solid white; border-bottom: 2px solid white; border-left:none; border-right:none; height: 2px; ">

                    <div  style="margin-top: 10px; width: 300px ; height: 300px; float: left; display: inline-block; margin-top: 10px; margin-bottom: 1px; margin-left: 10px; margin-right: 10px">
                        <img src="/images/estudiante.jpg" class="card-img-top" alt="" height="90%" >
                    </div>

                    <div style="float: left; display: inline-block; margin-top: 10px">
                        <p style="color: white; margin-left: 20px">Código: <strong style="color: white">{{$estudiante->id}} </strong></p>
                        <p style="color: white; margin-left: 20px">Nombre: <strong style="color: white">{{$estudiante->nombres}} {{$estudiante->apellidos}}</strong></p>
                        <p style="color: white; margin-left: 20px">Identidad: <strong style="color: white">{{$estudiante->identidad}} </strong> </p>
                        <p style="color: white; margin-left: 20px">Ciudad: <strong style="color: white">{{$estudiante->ciudad}} </strong> </p>
                        <p style="color: white; margin-left: 20px">Grado: <strong style="color: white"></strong> </p>
                    </div>

                </div>
            </div>
        </div>
@endsection
