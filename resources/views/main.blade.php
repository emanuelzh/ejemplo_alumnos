<!DOCTYPE html>
<html>
    <head>
        <title>Skilltest</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css">
        @yield('extra-headers')
    </head>
    <body>
        <div id="main-container" class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{url('/')}}">Skilltest</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Salir</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- termina nav -->

            <!-- contenido -->
            @yield('contenido')
            <!-- contenido -->

            <footer>
                <hr>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p><a href="#">Contacto</a> / <a href="#">Soporte</a> / ® 2015 </p>
                    </div>
                </div>

            </footer>

        </div>

    <script language="javascript" src="{{asset('js/main.js')}}"></script>
    @yield('javascript')
    </body>
</html>
