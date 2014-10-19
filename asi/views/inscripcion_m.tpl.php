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
	<title>Inscripción de miembro</title>
	<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="../css/custom.css">
  	<link type="text/css" href="../css/map.css" rel="stylesheet" media="all" />

  	<script type="text/javascript" src="../js/script_combo.js"></script>
  	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es"></script>
  	<script type="text/javascript" src="../js/mapa.js"></script>
  	<meta charset="UTF-8">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <img id="logo1" src="../img/ases1.jpg" class="img-responsive" alt="Responsive image">
      <a  class="navbar-brand" href="#"><h3>SCOUT</h3>El Salvador</a> 
    </div>
      <br>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">Inicio</a></li>
        <li><a href="solicitudes_inscripcion.html">Inscripciones</a></li>
        <li><a href="solicitudes_renovacion.html">Renovación</a></li>
        <li><a href="miembros_scout.html">Miembros Scout</a></li>
        <img id="logo2" src="../img/logo1.png" class="img-responsive" alt="Responsive image">
      </ul>

    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
	</nav>
	<h2 class="text-center">Inscripción de Miembro</h2>
	<div class="container">
	<hr class="line">
		<div class="col-lg-6"><br><br>
			<img src="../img/perfil.jpg">
			<br>
			<label>
			Cargar Imagen:	
			</label>
			<input type="file" name="field" id="field"  class=""><br>
			<label>Nombre:</label>
			<input type="text"  name="nombre" id="nombre" placeholder="Nombre" class="validate[required] medium form-control" required/><br>
			<label>Apellido:</label>
			<input type="text"   name="apellido" id="apellido" placeholder="Apellido" class="validate[required] medium form-control"><br>
			<label>Fecha de Nacimiento:</label>
			<input type="date"   name="fecha" id="fecha" placeholder="Fecha" class="validate[required] medium form-control">
			<br>
			<label>Género:</label>
			<label>Masculino
			<input type="radio" name="genero" checked="true">	
			</label>&nbsp;&nbsp;&nbsp;
			<label>Femenino</label>
			<input type="radio" name="genero">
			<br><br>
			<div class="well well-lg">
			<h2>Dirección</h2>
			<br>
			<label>Departamento</label>
			<select class="combobox form-control" id="departamento" nombre="departamento">
			</select><br>
			<label>Municipio</label>
			</label>
			<select class="combobox form-control" id="municipio" nombre="municipio">
		
			</select>

			<br>
			<label>Calle:</label>
			<input type="text"   name="calle" id="calle" placeholder="Calle" class="validate[required] medium form-control"><br>
			<label>Colonia:</label>
			<input type="text"   name="colonia" id="colonia" placeholder="Colonia" class="validate[required] medium form-control"><br>
			<label>No. Casa:</label>
			<input type="text"   name="casa" id="casa" placeholder="Número de casa" class="validate[required] medium form-control"><br>
		</div>
		</div>
		<div class="col-lg-6">
		<br>	
		<br>
		<label>Teléfono Casa:</label>
		<input type="text"  name="telcasa" id="telcasa" placeholder="telcasa" class="validate[required] medium form-control"><br>
		<label>Teléfono Celular:</label>
		<input type="text"  name="telcel" id="telcel" placeholder="telcel" class="validate[required] medium form-control"><br>
		<label>Correo:</label>
		<input type="email" name="email" id="email" placeholder="email" class="validate[required] medium form-control"><br>
		<label>DUI:</label>
		<input type="text"  name="dui" id="dui" placeholder="DUI" class="validate[required] medium form-control"><br>
		<label>Pasaporte:</label>
		<input type="text"  name="pasaporte" id="pasaporte" placeholder="Pasaporte" class="validate[required] medium form-control"><br>
		<label>No. de grupo:</label><br>
		<select class="combobox form-control" nombre="grupo" id="grupo">
		</select>
		<br>
		<br>
		<div id="map">
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
		<br>
		</div>

	</div>
		<br><br>
</body>
</html>