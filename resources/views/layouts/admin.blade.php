<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distrivan</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#inicio">DISTRIVAN </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="#inicio">Inicio</a></li>
                    <li role="presentation"><a href="#productos">Nuestros Productos</a></li>
                    <li role="presentation"><a href="#mapa">Mapa</a></li>
                    <li role="presentation"><a href="#contactanos">Contáctanos</a></li>
                    <li>
<a href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                    Cerrar Sesion
  </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
   </form>
</li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="inicio">
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <video src="{{asset('img/video.mp4')}}" autoplay muted loop width="1400" height="700"></video>

            </div>


        </div>
    </div>
    @yield('contenido')
    <h1 align="center" class="text-center text-primary">Ubicacion</h1>
    <div class="divdark" id="mapa">
        <div class="container" align="Center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d1240.2892678531384!2d-75.69788120273209!3d4.810562746091313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m3!3m2!1d4.8107470999999995!2d-75.697272!4m0!5e0!3m2!1ses!2ses!4v1505756778479" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
        </div>
    </div>
    <div class="container" id="contactanos">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <h1 class="text-center text-primary bigtitle"><strong>Contáctanos</strong></h1>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="lname" name="name" type="text" placeholder="Apellido" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Correo Electronico" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="Celular" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Ingresa tu mensaje aqui, te responderemos lo antes posible." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>


                        


                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


                    <footer class="wrapper style1 align-center">
                        <div class="inner">
                            <ul class="icons">

                               <a href="https://www.facebook.com/#" target="_blank"><img src="{{asset('img/face.png')}}"  width="50" height="50" alt="Facebook" style="margin:0 5px 0 0;" /></a>
                               <a href="https://twitter.com/#" target="_blank"><img src="{{asset('img/twt.png')}}"  width="50" height="50" alt="Twitter" style="margin:0 5px 0 0;" /></a>
                               <a href="https://www.instagram.com/#" target="_blank"><img src="{{asset('img/ins.jpg')}}"  width="50" height="50" alt="Instagram" style="margin:0 5px 0 0;" /></a>
                            </ul>
                            
                        </div>
                    </footer>



    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!--Si se extiende esta plantilla para otra
    se pueden utilzar scripts  para trabajar con javascript-->
    @stack('scripts')
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>