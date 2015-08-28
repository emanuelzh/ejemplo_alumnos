@extends('main')

@section('contenido')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <h2>Alumnos</h2>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <th>Nombre</th>
                    <th>Carrera</th>
                    <th></th>
                    </thead>
                    <tbody>
                    @foreach($alumnos as $alumno)
                    <tr>
                        <td>{{$alumno->nombre}}</td>
                        <td>{{$alumno->carrera}}</td>
                        <td class="actions-column">
                            <a class="btn btn-sm btn-info" href="{{url('alumnos/'.$alumno->id)}}"><i class="fa fa-eye"></i> Detalle</a>
                            <a class="btn btn-sm btn-default" href="{{url('alumnos/'.$alumno->id.'/colegiatura')}}"><i class="fa fa-usd"></i> Registrar colegiatura</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection