@extends('main')

@section('contenido')
<div class="row">
    <div class="col-md-12 col-lg-12">
        <h2>{{$alumno->nombre}}</h2>
        <hr>
    </div>
</div>
<div class="row">
    <div class="col-lg-9">
        <div id="form-colegiatura" class="well bs-component">
            <form class="form-horizontal">
                <fieldset>
                    <legend>Registrar colegiatura</legend>
                    <div class="form-group">
                        <label for="select" class="col-lg-3 control-label">Semestre</label>
                        <div class="col-lg-4">
                            <select class="form-control" id="semestre">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="promedio" class="col-lg-3 control-label">Promedio</label>
                        <div class="col-lg-4">
                            <input v-model="promedio" type="text" class="form-control" id="promedio" placeholder="Ej. 8.2" number>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="colegiatura" class="col-lg-3 control-label">Colegiatura</label>
                        <div class="col-lg-4">
                            <input v-model="colegiatura_base" type="text" class="form-control" id="colegiatura" placeholder="" number>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-3 control-label">Beca</label>
                        <div class="col-lg-4">
                            <h4>@{{beca}}%</h4>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail" class="col-lg-3 control-label">Colegiatura total</label>
                        <div class="col-lg-4">
                            <h4>$@{{colegiatura_final}}</h4>
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

@section('javascript')
<script>
   var vm = new Vue({

        el : '#form-colegiatura',
        data : {
            promedio : 0.0,
            colegiatura_base : 0,
            beca : 0,
            colegiatura_final : 0
        },
        methods : {
            recalculate : function() {
               if(this.beca == 0)
                   this.colegiatura_final = this.colegiatura_base
               else
                   this.colegiatura_final = Math.round(((100-this.beca) / 100) * this.colegiatura_base);

           }
       }
    });

    vm.$watch('promedio',function(val){
        console.log(val);
        //utilizamos valores en esta table
        //realmente el incremento cúbico no es real y la formula
        //fue obtenida de ortra forma, revisar
        //https://gist.github.com/emanuelzh/0ac65a18a807acec9144
        if(val >= 8 && val <=10) {
            if(val >= 8)
                this.beca = 20;
            if(val >=8.4)
                this.beca = 20.6;
            if(val >= 8.8)
                this.beca = 25.1;
            if(val >= 9)
                this.beca = 30;
            if(val >= 9.2)
                this.beca = 37.3;
            if(val >= 9.6)
                this.beca = 61;
            if(val >= 10)
                this.beca = 100;
        } else {
            this.beca = 0;
        }
        vm.recalculate();
    });

    vm.$watch('colegiatura_base', function(val){
        if(this.promedio < 8)
            this.colegiatura_final = Math.round(this.colegiatura_base);
        else
            vm.recalculate();
    });
</script>
@endsection