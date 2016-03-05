<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- CSS -->
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/main.css">

    <!-- Jquery -->
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
</head>
<div class="container">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost:8000/myFrame/">Nombre de la Empresa</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                            Servicios 
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Desarrollo</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Soporte Técnico</li>
                            <li><a href="#">Soporte Técnico por evento</a></li>
                            <li><a href="#">Mesa de ayuda en sitio</a></li>
                            <li><a href="#">Mesa de Ayuda remota</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                            Servicios 
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Soluciones</a></li>
                            <li><a href="#">Control de inventarios</a></li>
                            <li><a href="#">Puntod de ventas</a></li>
                        </ul>
                    </li>
                    <li><a href="http://localhost:8000/myFrame/estados">Acerca de</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="public/img/slider/nav1.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="public/img/slider/nav2.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="public/img/slider/nav3.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="public/img/slider/nav4.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left glyphicon-chevron-left"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right glyphicon-chevron-left"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="espaciado"></div>

    <div class="row text-center">
        <div class="col-md-3">
            <img src="http://icons.iconarchive.com/icons/graphicloads/100-flat/64/settings-3-icon.png" class="text-center">
        </div>

        <div class="col-md-3">
            <img src="http://icons.iconarchive.com/icons/graphicloads/100-flat/64/analytics-icon.png" class="text-center">
        </div>
        <div class="col-md-3">
            <img src="http://icons.iconarchive.com/icons/pelfusion/long-shadow-media/64/Message-Bubble-icon.png">
        </div>
        <div class="col-md-3">
            <img src="http://icons.iconarchive.com/icons/pelfusion/long-shadow-media/64/Contact-icon.png">
        </div>
    </div>

    <div class="espaciado"></div>

    <div class="row">
        <div class="col-md-6">
            <img src="public/img/portafolio/portafolio1.png" class="img-responsive">
        </div>
        <div class="col-md-6">
            <img src="public/img/portafolio/portafolio3.png" class="img-responsive">
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <img src="public/img/portafolio/portafolio4.png" class="img-responsive">
        </div>
        <div class="col-md-6">
            <img src="public/img/portafolio/portafolio2.png" class="img-responsive">
        </div>
        <div class="col-md-4"></div>
    </div>

    <div class="espaciado"></div>

    <footer class="footer">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">
                    <i class="fa fa-facebook-square"></i>
                    <i class="fa fa-google-plus-square"></i>
                    <i class="fa fa-twitter-square"></i>
                    <p id="p"></p>
                </h2>
                <p class="footer-text text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis delt ist</p>
            </div>
        </div>
    </footer>
</div>
<body>
</body>
</html>