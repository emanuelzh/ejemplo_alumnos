@extends('main')

@section('contenido')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <h2>Detalle: Nombre del alumno</h2>
            <h4></h4>
            <hr>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="bs-component">
                <div class="alert alert-dismissable alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <h4>Nota</h4>
                    <p>Este alumno califica para mantener una beca del <strong>50%</strong>.</p>
                    <p><a href="{{url('alumno/1/beca')}}">Aplicar ahora</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <h3>Historial</h3>
        </div>
    </div>

@endsection