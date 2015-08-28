@extends('main')

@section('contenido')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <h2>{{$alumno->nombre}}</h2>
            <h4>Carrera: {{$alumno->carrera}}</h4>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <h3>Historial</h3>
        </div>
    </div>

@endsection