@extends('layouts.app')
@section('title', 'Profesor')
@section('content')
    <div class="container">
        <div>
            <div class="card" style="border-style: none!important; margin-top: 25px">
                <div class="container" style="border-style: none!important; background-color: #1595eb; border-radius: 5px; width: 42rem">
                    <li class="list-group-item" style="border-style: none!important; width: 40rem; margin: 0 auto; background: #1595eb" >
                        <h2 style="color:#ffffff; text-align: center">
                            Profesor
                        </h2>
                    </li>

                    <hr style="border-top: 2px solid white; border-bottom: 2px solid white; border-left:none; border-right:none; height: 2px; ">

                    <div  style="margin-top: 10px; width: 300px ; height: 300px; float: left; display: inline-block; margin-top: 10px; margin-bottom: 1px; margin-left: 10px; margin-right: 10px">
                        <img src="/images/estudiante.jpg" class="card-img-top" alt="" height="90%" >
                    </div>

                    <div style="float: left; display: inline-block; margin-top: 10px">
                        <p style="color: white; margin-left: 20px">Código: <strong style="color: white">{{$profesor->id}} </strong></p>
                        <p style="color: white; margin-left: 20px">Nombre: <strong style="color: white">{{$profesor->nombres}} {{$profesor->apellidos}}</strong></p>
                        <p style="color: white; margin-left: 20px">Profesion: <strong style="color: white">{{$profesor->profesion}} </strong> </p>
                        <p style="color: white; margin-left: 20px">Fecha Entrada: <strong style="color: white">{{\Carbon\Carbon::parse($profesor->fecha_entrada)->locale("es")->isoFormat("DD MMMM, YYYY")}}</strong> </p>

                    @if($profesor->activo === "I")
                            <p style="color: white; margin-left: 20px">Estado: <strong style="color: white">Inactivo</strong> </p>
                        @else
                            <p style="color: white; margin-left: 20px">Estado: <strong style="color: white">Activo </strong> </p>
                        @endif

                        </div>

                </div>
            </div>
        </div>
@endsection
