<!DOCTYPE html>
<html>
  <head>
    <title>LITTLEHOUSE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- styles -->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
    
  <body class="login-bg">
  @yield('contenido')
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">LITTLEHOUSE</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
<div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i> IntraNet</a></li>
					<li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Altas
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="{{URL::action('littlehouse@altacliente')}}">Clientes</a></li>
                            <li><a href="{{URL::action('littlehouse@altapedidos')}}">Pedidos</a></li>
							<li><a href="{{URL::action('littlehouse@altalmacen')}}">PAlmacen</a></li>
                            <li><a href="{{URL::action('littlehouse@altacasa')}}">Nueva Casa</a></li>
							<li><a href="{{URL::action('littlehouse@altaent')}}">Entradas </a></li>
							<li><a href="{{URL::action('littlehouse@altasal')}}">Salidas </a></li>
							<li><a href="{{URL::action('littlehouse@altausuarios')}}">Usuarios </a></li>
                        </ul>
                    </li>
					<li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Tablas
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="{{URL::action('littlehouse@reportecliente')}}">Clientes</a></li>
                            <li><a href="{{URL::action('littlehouse@reportepedido')}}">Pedidos</a></li>
                            <li><a href="{{URL::action('littlehouse@reportecasa')}}">Nueva Casa</a></li>
							<li><a href="{{URL::action('littlehouse@reportealmacen')}}">PAlmacen</a></li>
							<li><a href="{{URL::action('littlehouse@reportent')}}">Entradas</a></li>
							<li><a href="{{URL::action('littlehouse@reportesal')}}">Salidas</a></li>
							<li><a href="{{URL::action('littlehouse@reporteus')}}">Usuarios</a></li>
                        </ul>
                    </li>
                    <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendario</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Cuenta
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>
	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>  @yield('men')</h6>
			                <div class="social">
	                            <div class="division">
	                                @yield('men1')
	                            </div>
	                        </div>
			                           
			            </div>
			        </div>

			        <div class="already">
			            <p>Necesitas ayuda?</p>
			            <a href="signup.html">Manual de Sistema</a>
			        </div>
			    </div>
			</div>
		</div>
	</div>
    <br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2018 <a href='#'>|LITTLEHOUSE.COM</a>
            </div>
            
         </div>
      </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                                                                                                                                                                     <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
  </body>
</html>