<?php
    //Database
	//require_once 'clases/cEmpleado.php';
    // Objetos
     //$oRegistro   = new Registro();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Inscripcion de miembro</title>

	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  	<link type="text/css" href="css/map.css" rel="stylesheet" media="all" />
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es"></script>
  <script type="text/javascript" src="js/mapIns.js"></script>
  <script type="text/javascript" src="js/script_combo.js"></script>
</head>
<body>
	
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img id="logo1" src="img/ases1.jpg" class="img-responsive" alt="Responsive image">
      <a  class="navbar-brand" href="#"><h3>SCOUT</h3>El Salvador</a> 
      
    </div>
      
      <br>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">Inicio</a></li>
        <li><a href="#">Inscripciones</a></li>
        <li><a href="#">Renovacion</a></li>
        <li><a href="#">Grupos Scout</a></li>
        <li><a href="#">Miembros Scout</a></li>
        <img id="logo2" src="img/logo1.png" class="img-responsive" alt="Responsive image">

      </ul>

    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
	</nav>
	<h2 class="text-center">Inscripcion de Miembro</h2>
	<div class="container">
		<div class="col-lg-6">
			<img src="../img/perfil.jpg">
			<br>
			<label>
			Cargar Imagen:	
			</label>

			<input type="file" name="field" id="field"  class="">
			<label>Nombre:</label>
			<input type="text"  name="nombre" id="nombre" placeholder="Nombre" class="validate[required] medium form-control">				
			
			<label>Apellido:</label>
			<input type="text"   name="apellido" id="apellido" placeholder="Apellido" class="validate[required] medium form-control">

			<label>Fecha de Nacimiento:</label>
			<input type="date"   name="fecha" id="fecha" placeholder="Fecha" class="validate[required] medium form-control">
			<br>
			<label>Genero:</label>
			<label>Masculino
			<input type="radio" name="genero" checked="true">	
			</label>
			<label>Femenino
			<input type="radio" name="genero"  >	
			</label>
			<div class="well well-lg">
			<h2>Direccion</h2>
			<br>
			<label>Departamento</label>
			<select class="combobox form-control" id="departamento" nombre="departamento">
			</select>
				Municipio
			</label>
			<select class="combobox form-control" id="municipio" nombre="municipio">
		
			</select>

			<br><br>
			<label>Calle:</label>
			<input type="text"   name="calle" id="calle" placeholder="calle" class="validate[required] medium form-control"><br>
			<label>Colonia:</label>
			<input type="text"   name="colonia" id="colonia" placeholder="colonia" class="validate[required] medium form-control"><br>
			<label>No. Casa:</label>
			<input type="text"   name="casa" id="casa" placeholder="casa" class="validate[required] medium form-control"><br>
			


		</div>
		</div>

		<div class="col-lg-6">
			<br>
			
		<br>
		<label>Telefono Casa:</label>
		<input type="text"  name="telcasa" id="telcasa" placeholder="telcasa" class="validate[required] medium form-control"><br>
		<label>Telefono Celular:</label>
		<input type="text"  name="telcel" id="telcel" placeholder="telcel" class="validate[required] medium form-control"><br>
		<label>Correo:</label>
		<input type="email" name="email" id="email" placeholder="email" class="validate[required] medium form-control"><br>
		<label>DUI:</label>
		<input type="text"  name="dui" id="dui" placeholder="dui" class="validate[required] medium form-control"><br>
		<label>Pasaporte:</label>scr
		<input type="text"  name="pasaporte" id="pasaporte" placeholder="pasaporte" class="validate[required] medium form-control"><br>
		<label>No. de grupo:</label><br>
		<select class="combobox form-control" nombre="grupo" id="grupo">
			  
			
		</select>
		<br>
		<br>
		<div id="mapa">

	</div>
		<br>
		<br>
			<button class="btn btn-danger">
				Cancelar
			</button>
			<button class="btn btn-success" type="submit" value="Enviar" onclick="insertBR()">
				Guardar
			</button>
		<br>
		<br>
			
		</div>

	</div>
		
</body>
</html>