<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="css/forms.css" rel="stylesheet">

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
	                 <h1><a href="index.html">Bootstrap Admin Theme</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
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
                            <li><a href="signup.html">Pedidos</a></li>
							<li><a href="login.html">Usuarios</a></li>
                            <li><a href="signup.html">Nueva Casa</a></li>
							<li><a href="login.html">Producto de Almacen</a></li>
                        </ul>
                    </li>
					<li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Tablas
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="login.html">Clientes</a></li>
                            <li><a href="signup.html">Pedidos</a></li>
							<li><a href="login.html">Usuarios</a></li>
                            <li><a href="signup.html">Nueva Casa</a></li>
							<li><a href="login.html">Producto de Almacen</a></li>
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
					            <div class="panel-title">Horizontal Form</div>
					          
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Text Field</label>
								    <div class="col-sm-10">
								      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Password Field</label>
								    <div class="col-sm-10">
								      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Textarea</label>
								    <div class="col-sm-10">
								      <textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Readonly</label>
								    <div class="col-sm-10">
								      <span class="form-control">Read only text</span>
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <div class="checkbox">
								        <label>
								          <input type="checkbox"> Checkbox
								        </label>
								      </div>
								      <div class="checkbox">
								        <label>
								          <input type="checkbox"> Checkbox
								        </label>
								      </div>
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-primary">Sign in</button>
								    </div>
								  </div>
								</form>
			  				</div>
			  			</div>
	  				</div>
	  				<div class="col-md-6">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Vertical Form</div>
					          
					            <div class="panel-options">
					              <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
					              <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
					            </div>
					        </div>
			  				<div class="panel-body">
			  					<form action="">
									<fieldset>
										<div class="form-group">
											<label>Text field</label>
											<input class="form-control" placeholder="Text field" type="text">
										</div>
										<div class="form-group">
											<label>Password field</label>
											<input class="form-control" placeholder="Password" type="password" value="mypassword">
										</div>
										<div class="form-group">
											<label>Textarea</label>
											<textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
										</div>
										<div class="form-group">
											<label>Readonly</label>
											<span class="form-control">Read only text</span>
										</div>
									</fieldset>
									<div>
										<div class="btn btn-primary">
											<i class="fa fa-save"></i>
											Submit
										</div>
									</div>
								</form>
			  				</div>
			  			</div>
	  				</div>
	  			</div>
<!--  Page content -->
		  </div>
		</div>
    </div>
	@yield('pie')

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="vendors/select/bootstrap-select.min.js"></script>

    <script src="vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="vendors/moment/moment.min.js"></script>

    <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>
  </body>
</html>