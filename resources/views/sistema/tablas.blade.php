<!DOCTYPE html>
<html>
  <head>
    <title>LittleHouse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
                                                                                                                                                                                <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
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
    @yield('contenido')
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">LITTLEHOUSE</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Buscar...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Buscar</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="login.html">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
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
		  <div class="col-md-10">
  			

  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Tablero de Reportes</div>
				</div>
  				<div class="panel-body">
  					<div class="table-responsive">
					<center>
  						<table class="table table-condensed">
			              @yield('tabla')
			            </table>
						</center>
  					</div>
  				</div>
  			</div>

  			



		  </div>
		</div>
    </div>
@yield('pie')
    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2018 <a href='#'>LittleHouse</a>
            </div>
            
         </div>
      </footer>

      <link href="{{asset('vendors/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                                                                                                                                                                              <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
                                                                                                                                                                 <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('vendors/datatables/js/jquery.dataTables.min.js')}}"></script>

    <script src="{{asset('vendors/datatables/dataTables.bootstrap.js')}}"></script>

    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/tables.js')}}"></script>
  </body>
</html>