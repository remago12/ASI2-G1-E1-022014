<!DOCTYPE html>
<html>
<head>
	<title>
		Peril Usuario
	</title>
	<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="../css/custom.css">
  	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed|Francois+One' rel='stylesheet' type='text/css'>
  	<meta charset="UTF-8">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <a class="navbar-brand tema" href="#">Scout</a>
    
    <a class="navbar-brand tema" href="#">El Salvador</a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <br>
      <img id="logo2" src="../img/logo1.png" class="img-responsive hidden-xs hidden-sm" alt="Responsive image">
      

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <!--solo tienen que   copiar la siguiente linea para generar mas items -->
        <li><a href="../index.html">Inicio</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mantenimiento<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Banco</a></li>
            <li><a href="#">Alergias</a></li>
            <li><a href="#">Padecimiento</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li><a href=""><img src="..."></a> </li>
        <li><a href="">Oscar Lizama</a></li>
      	<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cerrar Sesion<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Banco</a></li>
            <li><a href="#">Alergias</a></li>
            <li><a href="#">Padecimiento</a></li>
            <li class="divider"></li>
            <li><a href="#">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="container">
		<div class="row">
			<h1 class="text-center">Perfil de Usuario</h1>
			<div class="col-md-4">
				<label>
					Nombre:
				</label>
				<br>
				<label>
					Oscar Antonio					
				</label>
				<br>
				<label>
					Cargo de Grupo:
				</label>
				<br>
				<label>
					no se los cargos
				</label>

			</div>
			<div class="col-md-4">
				<label>
					Grupo:
				</label>
				<br>
				<label>
					69
				</label>
				<br>
				<label>
					Cargo Nacional:
				</label>
				<br>
				<label>
					tampoco me los se 
				</label>

			</div>
			<div class="col-md-4">
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  				 Renovacion
				</button>
			</div>
		</div>	
	</div>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Renovacion</h4>
      </div>
      <div class="modal-body">
      <form>
      	
      	<label>Imagen del Recivo:</label>
        <input type="file" form-control>
        <label>Fecha de renovacion:</label>
        <br>
        <input type="date" class="form-control">
        <label>
        	Banco:
        </label>
        <input type="text" class="form-control">
        <label>
        	Numero de Factura:
        </label>	
        <input type="text" class="form-control">	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </form>
      </div>
    </div>
  </div>
</div>	
</body>
</html>
