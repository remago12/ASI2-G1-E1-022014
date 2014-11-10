<?php
    //Database
  require_once '../../model/data/dataBase.php';
  require_once '../../model/clases/cUsuario.php';
  require_once '../../model/clases/cPerfil.php';
 
  session_start();
    // Objetos
     $oUsuario   = new Usuario();
     $perfil     = new Perfil();
    // revisando sesiones 
    
    if ( $oUsuario->verSession() == true ) {
    if (isset($_SESSION['rol'])) {
        $rol = $_SESSION['rol'];
           if ($rol == "1") {   
          }elseif($rol =="2"){
 
          }else{
             header("Location: ../../controller/login.php");
            exit(); 
          }
        }else{
          header("Location: ../../controller/login.php");
          exit();
        }
    }else{
      header("Location: ../../controller/login.php");
          exit();
    }  
  $usuario  = $_SESSION['usuario'];
        ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Perfil de Grupo
	</title>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script type="text/javascript" src="../../js/mapa.js"></script>
	<script type="text/javascript" src="../../js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="../../css/custom.css">
  	<meta charset="UTF-8">
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
  		<div class="container-fluid">
    	<!-- Brand and toggle get grouped for better mobile display -->
    	<div class="navbar-header">
      	<img id="logo1" src="../../img/ases1.jpg" class="img-responsive" alt="Responsive image">
      		<a  class="navbar-brand" href="#"><h3>SCOUT</h3>El Salvador</a>
    	</div>
      	<br>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../indexJefe.php">Inicio</a></li>
        <li><a href="solicitudes_inscripcion.html">Inscripciones</a></li>
        <li><a href="solicitudes_renovacion.html">Renovación</a></li>
        <li><a href="">Bienvenido <?=$usuario?></a></li>
      	<li><a href="../exit.php">Cerrar Sesion</a></li>
        <img id="logo2" src="../../img/logo1.png" class="img-responsive" alt="Responsive image">
      </ul>
    	</div><!-- /.navbar-collapse -->
  		</div><!-- /.container-fluid -->
	</nav>
	<div class="container">	
		<div class="row">
			<h2 class="text-center">
				Perfil de Grupo
			</h2>
			<hr class="line">
			<div class="col-lg-6"><br>
				<label>Nombre del Grupo:</label>
				San Jorge
				<br>
				<label>Número de Grupo:</label>
				8
				<br>
				<label>Jefe de Grupo:</label>
				Oscar Antonio Lizama Mejia
				<br>
				<label>Estado:</label>
				<select>
					<option>Activo</option>	
					<option>Inactivo</option>					
				</select>
				<br>
				<label>Fecha de fundación:</label>
				2/3/14
				<br>
				<label>Exclusivo:</label>
				Si
				<br>
				<label>Lugar de reunión:</label>
				Parque  Bicentenario
				<br>
				<label>Dia de Reunión:</label>
				Sábado
				<br>
				<label>Hora de Reunión:</label>
				3:00 p.m
				<br>
				<label>Propietario del Lugar:</label>
				Alcaldia de San Salvador
				<br>
				<label>Teléfono:</label>
				22334354
			</div>
			<div class="col-lg-6">
				<h2>Localización</h2>
				<label>Dirección:</label>
				<p>Avenida Jerusalén San Salvador, San Salvador</p>
				<label>Longitud:</label>
				-89.7667888
				<label>Latitud:</label>
				13.7474748
				<img src="../../img/mapa.png" class="img-responsive" alt="Responsive image">
			</div>
		</div>
		<br>
		<div class="row">
			<!-- <div class="col-lg-6 col-lg-offset-6"> --> 
			<h2 class="text-center">
				Observaciones
			</h2>
			<hr class="line">
			<table class="table table-striped">
			  <thead>
			  	<tr>
			  		<th>Comentarios</th>
			  		<th>Fecha de Observación</th>
			  	</tr>
			  </thead>
			  <tbody>
			  	<tr>
			  		<td>
			  			Fundación de Grupo San Jorge en 02/03/14
			  		</td>
			  		<td>
			  			12/06/14
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>
			  			Consejo de Grupo
			  		</td>
			  		<td>
			  			22/07/14
			  		</td>
			  	</tr>
			  </tbody>				
			</table>
			<button class="btn btn-primary">
				Agregar Observación
			</button>
			<button class="btn btn-primary">
				Modificar Observación
			</button>
			<br>
			<br>
		</div>		
	</div>
<br>
<br>  
</body>
</html>