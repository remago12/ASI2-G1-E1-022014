<?php
    //Database
  require_once '../model/data/dataBase.php';
  require_once '../model/clases/cUsuario.php';
 
  session_start();
    // Objetos
     $oUsuario   = new Usuario();
    // revisando sesiones 
    
    if ( $oUsuario->verSession() == true ) {
    if (isset($_SESSION['rol'])) {
        $rol = $_SESSION['rol'];
           if ($rol == "1") {   
          }else{
             header("Location: login.php");
            exit(); 
          }
        }else{
          header("Location: login.php");
          exit();
        }
    }else{
      header("Location: login.php");
          exit();
    }
    
  $usuario  = $_SESSION['usuario'];
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Grupos Scout</title>

	<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="../css/custom.css">
  	  	<link type="text/css" href="../css/map.css" rel="stylesheet" media="all" />
	  	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es"></script>
  	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed|Francois+One' rel='stylesheet' type='text/css'>	
  	
  	<script type="text/javascript" src="../js/script_combo.js"></script>
  	<script type="text/javascript" src="../js/grupos.js"></script>
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
        <li><a href="../views/indexAdmin.tpl.php">Inicio</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Solicitudes<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../mantenimiento/manBanco.tpl.php">Inscripcion</a></li>
            <li><a href="../mantenimiento/alergias.tpl.php">Renovacion</a></li>

          </ul>
        </li>
        
        <li><a href=""><img src="..."></a> </li>
        <li><a href="">Oscar Lizama</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cerrar Sesion<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<div class="container">
		<h1 class="text-center">Grupos Scout</h1>
		<hr class="line"><br>		
		<div class="row">
			<div class="col-lg-4">
				<a href="../controller/nuevo_grupo.php" class="btn btn-primary btn-lg" role="button">Agregar un Nuevo Grupo</a>
			</div>
			
		</div><br>
		<div class="row">
			<div class="col-lg-4">
				<select class="form-control" name="departamento" id="departamento">
					<option>
						Seleccione un departamento
					</option>
				</select>
			</div>
			<div class="col-lg-4">
				<select class="form-control" name="municipio" id="municipio">
					<option>
						Selecciona un municipio
					</option>
				</select>
			</div>
			<div class="col-lg-2">
				<input type="text" class="form-control" placeholder="Nombre de grupo" name="nomgrup" id="nomgrup" value="">
			</div>
			<div class="col-lg-2">
				<select class="form-control" name="grupo" id="grupo">
					<option>
						Seleccione un grupo
					</option>
				</select>
			</div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-lg-12">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>No.Grupo</th>
							<th>Nombre de Grupo</th>
							<th>Departamento</th>
							<th>Municipio</th>
							<th>Lugar de reunion</th>
							<th>Dia de Reunion</th>
							<th>Hora de Reunion</th>
							
						</tr>
					</thead>
					<tbody name="loop" id="loop">	
					</tbody>
				</table>
				<ul class="paginacion text-center" >
          </ul> 
			</div>
		</div>	
	</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h1 class="modal-title" id="myModalLabel">Ubicacion</h1>
      </div>
      <div class="modal-body">
       <input type="hidden" name="txt_lat" id="txt_lat" class="form-control" value="">
					<input type="hidden" name="txt_lng" id="txt_lng" class="form-control" value="">	
					<div id="map" name="map">
						
					</div>		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>