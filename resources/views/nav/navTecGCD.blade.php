<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>TECGCI</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery.min.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="stylesheet" href="../css/bootstrap-tagsinput.css">  
        <script src="../js/bootstrap-tagsinput.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        @yield('js_user_page')
        @yield('js_exp_docente')
        @yield('js_contrasena')
        @yield('css')
        @yield('js')
        
        
</head>
<body style="background-color: #F2F3F4  ;">
    
</body>
    <body class="hold-transition layout-top-nav layout-navbar-fixed"> 
        <div class="wrapper">
            <nav class="navbar navbar-expand-md navbar-dark" style="background-color:  #1B396A ">
                <div class="container">
                    <a class="navbar-brand logo" href="#homepage"><img src="{{ asset('../img/logob.png') }} " style="height: 60px;" ></a>
                    <span class="navbar-brand" style="font-family: 'italic'; font-size: 30px;"><u>Tec<i>GCI</i></u></span>
                    <!-- Boton Desplegable -->
                    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Alternar Menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                        <ul class="navbar-nav ml-auto">
                            @auth
                            <li class="nav-item">
                                <a href="{{ url('/Inicio') }}" class="nav-link" style="color: white;">Inicio</a>
                            </li>
                            <li class="nav-item dropdown" >
                                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="far fa-user-circle fa-fw" style="color: white;"></i>
                                    @auth
                                        {{ Auth::user()->nombre}} {{Auth::user()->roles->isNotEmpty() ? Auth::user()->roles->first()->nombre_Rol : "" }}
                                    @endauth
                                </a>
                                <ul class="dropdown-menu border-0 shadow" aria-labelledby="navbarDropdown">
                                    <li><a href="/Usuario/index" class="dropdown-item" >
                                        <font size = 1, align="center">Mi perfil</font></a></li>
                                    <form style="display: inline" action="logout" method="POST">
                                        @csrf
                                        <a href="#" class="dropdown-item" onclick="this.closest('form').submit()">
                                            <font size = 1, align="center">Cerrar sesión</font>
                                        </a>
                                    </form>
                                </ul>
                            </li>
                            
                            @else
                            
                            <li class="nav-item">
                                <a class="nav-link" style="color: white;" href="/Usuarios/login">Iniciar Sesión</a>
                            </li>
                        
                            <li class="nav-item">
                                <a class="nav-link" style="color: white;" href="{{url('Usuarios/register')}}">Registrarme</a>
                            </li>
                            @endauth
                        </ul>                       
                    </div>
                </div>
            </nav>

            <br>
            @if(session('status'))
                <div class="row">
                    <div class="col-md-8">
                    </div>
                    <div class="col-md-3">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h6><i class="fas fa-check-circle"></i> Sesión iniciada</h6>
                            <h6 align="center">{{session('status')}}</h6>
                        </div>
                    </div>
                </div>
            @endif
            
            @if(session('status1'))
                <div class="row">
                    <div class="col-md-8">
                    </div>
                    <div class="col-md-3">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h6 ><i class="fas fa-check-circle"></i></i> Hasta luego</h6>
                            <h6 align="center">{{session('status1')}}</h6>
                        </div>
                    </div>
                </div>
            @endif
            
            <div class="flex-center position-ref full-height">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
    <div class="row">
        <div class="col-sm-7" style="padding-right: 0;">
            <div class="card-border-0" style="height: 70px; background-color: #fbfafa">
                <div class="mx-auto d-block" style="text-align: center">
                    <img src="{{ asset('../img/logos0.png') }} " style="height: 60px; width: 88%; " class="card-img d-top">
                </div>
            </div>
        </div>
        <div class="col-sm-5" style="padding-left: 0;">
            <div class="card-border-0" style="height: 70px; background-color: #fbfafa">
                <div class="mx-auto d-block" style="text-align: left">
                    <img src="{{ asset('../img/logos1.png') }}" style="height: 60px; width: 88%;" class="card-img d-top">
                </div>
            </div>
        </div>
    </div>
    
<footer style = "background-color:  #1B396A">
    <div class="container" style="color:#ffffff">
        <div class="row">
                <div class="col-sm-12 col-md-6">
                    <font size = 2, class="text">Contacto:</font>
                    <font class="text" size = 1>
                    <br>KM 2.5 Carretera Federal Perote-México,<br>
                    91270 Perote, Veracruz. México.<br>
                    Tel. 282 825 31 50<br>
                    </font>
                </div> 
        </div>

            <div class="row"> 
                <div class="col-md-12">
                    <h6 size=1, class="text-center">AxLRZ @2021. Todos los derechos reservados.</h6>
                </div>   
            </div>
                <div class="content" >
                   
                    @yield('cont')
                </div>
    </div>
</footer>
</html>
