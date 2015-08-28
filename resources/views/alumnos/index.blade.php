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
                    <th>Semestre</th>
                    <th></th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Jeffrey James</td>
                        <td>Economia</td>
                        <td>4</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{url('alumnos/1')}}"><i class="fa fa-eye"></i> Detalle</a>
                            <a class="btn btn-sm btn-default" href="{{url('alumnos/1/colegiatura')}}"><i class="fa fa-usd"></i> Registrar colegiatura</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection