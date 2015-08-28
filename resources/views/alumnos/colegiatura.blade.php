@extends('main')

@section('contenido')
<div class="row">
    <div class="col-lg-9">
        <div class="well bs-component">
            <form class="form-horizontal">
                <fieldset>
                    <legend>Registrar colegiatura</legend>
                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-3 control-label">Alumno</label>
                        <div class="col-lg-8">
                            <h4>Nombre del alumno</h4>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="select" class="col-lg-3 control-label">Semestre</label>
                        <div class="col-lg-4">
                            <select class="form-control" id="semestre">
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="promedio" class="col-lg-3 control-label">Promedio</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="promedio" placeholder="Ej. 8.2">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="colegiatura" class="col-lg-3 control-label">Colegiatura</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="colegiatura" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-3 control-label">Beca</label>
                        <div class="col-lg-4">
                            <h4>0%</h4>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-3 control-label">Colegiatura total</label>
                        <div class="col-lg-4">
                            <h4>$0.00</h4>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-4 col-lg-offset-3">
                            <a id="registrar" href="#" class="btn btn-success">Registrar</a>
                        </div>
                    </div>
                </fieldset>
            </form>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
    </div>
</div>
@endsection