<!DOCTYPE html>
<html>
  <head>
    <title>LittleHouse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
                                                                                                                                                                      <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
    <!-- Bootstrap -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	
    <!-- styles with asset -->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">

    <link href="{{asset('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/form-helpers/css/bootstrap-formhelpers.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/select/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/tags/css/bootstrap-tags.css')}}" rel="stylesheet">

    <link href="{{asset('css/forms.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  @yield('contenido')
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

	  			<div class="row">
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Altas</div>
					          
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  					 @yield('alta')
								 
			  				</div>
			  			</div>
	  				</div>
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Instrucciones</div><br><br>
								<hr style="color: #0056b2;" />
								<table>
					          <tr><td>1. Debes de llenar todos los campos sin excepción alguna </td></tr>
							  <tr><td>2. El ID no se pede modificar, para esto deberás axcesar a la Base de Datos </td></tr>
							  <tr><td>3. Llenar los campos conforme lo indica la caja de texto </td></tr>
							  <tr><td>4. Una vez registrado el nuevo campo, podras verlo en las tablas </td></tr>
							  <tr><td><p style="color:#FF0000";>Contactar al Tecnico a cargo en caso de error en el Sistema</p></td></tr>
							  <tr><td><p style="color:#00FF00";>al221511513@gmail.com</p></td></tr>
							  </table>
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  					
			  				</div>
			  			</div>
	  				</div>
	  			</div>
<!--  Page content -->
		  </div>
		</div>
    </div>
	@yield('pie')
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
    <!-- jQuery UI -->
                                                                                                                                                                   <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('vendors/form-helpers/js/bootstrap-formhelpers.min.js')}}"></script>

    <script src="{{asset('vendors/select/bootstrap-select.min.js')}}"></script>

    <script src="{{asset('vendors/tags/js/bootstrap-tags.min.js')}}"></script>

    <script src="{{asset('vendors/mask/jquery.maskedinput.min.js')}}"></script>

    <script src="{{asset('vendors/moment/moment.min.js')}}"></script>

    <script src="{{asset('vendors/wizard/jquery.bootstrap.wizard.min.js')}}"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="{{asset('vendors/bootstrap-datetimepicker/datetimepicker.css')}}" rel="stylesheet">
     <script src="{{asset('vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js')}}"></script> 


    <link href="{{asset('//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css')}}" rel="stylesheet"/>
	<script src="{{asset('//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js')}}"></script>

    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/forms.js')}}"></script>
  </body>
</html>