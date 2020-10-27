<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Medios de comunicación @yield('titulo')

    </title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
   
</head>
<body>
    <div class="container">
        <header>

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/imagen1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/imagen2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/imagen3.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                           
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="{{route('index')}}">Medios de comunicación</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('index')}}">Inicio<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('Medios de comunicación interpersonal')}}">Comunicación interpersonal</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('Estructura según su carácter')}}">Estructura según su carácter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('Los medios de comunicación más utilizados')}}"> Los medios de comunicación más utilizados</a>
                        </li>
                        
                    </ul>

                </div>
            </nav>

        </header>
          <br>
        <section>
            <div class="row">
                <aside class=" d-none d-sn-none d-nd- block d-nd-lg-block d-xl-block col-md-4">

                    <ul class="list-group">
                        <li class="list-group-item">Descripcion basica</li>
                        <li class="list-group-item list-group-item-primary">Comunicación interpersonal</li>
                        <li class="list-group-item list-group-item-secondary">Estructura según su carácter</li>
                        <li class="list-group-item list-group-item-success">Los medios de comunicación más utilizados</li>

                </aside>
                <article class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                   @yield('contenido')
               <br>
               <br>
                </article>
            </div>

        </section>

        <footer class="bg-dark">
<p class="text-center text-white">
    Escritora: María Vieira White.
    <br>
    Diseñador web: Jose Andres Mejia. <br>

</p>

        </footer>

                     
    </div>             
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>

