 <?php
    //Database
	//require_once '/var/www/html/ASI2-G1-E1-022014/asi/model/clases/cRegistro.php';
	//require_once '/var/www/html/ASI2-G1-E1-022014/asi/model/data/dataBase.php';
    // Objetos
     //$oRegistro   = new Registro();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Inscripción de miembro
	</title>
	<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="../css/custom.css">
  	<link type="text/css" href="../css/map.css" rel="stylesheet" media="all" />
  	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es"></script>
  	<script type="text/javascript" src="../js/mapa.js"></script>
  	<script type="text/javascript" src="../js/mapLog.js"></script>
  	<script type="text/javascript" src="../js/mapIns.js"></script>
  	<script type="text/javascript" src="../js/script_combo.js"></script>
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
        <li><a href="#">Inicio</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mantenimiento<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../views/mantenimiento/manBanco.tpl.php">Banco</a></li>
            <li><a href="../views/mantenimiento/alergias.tpl.php">Alergias</a></li>
            <li><a href="../views/mantenimiento/padecimiento.tpl.php">Padecimientos</a></li>
            <li class="divider"></li>
            <li><a href="../views/mantenimiento/estado.tpl.php">Estado</a></li>
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



	<h2 class="text-center">Inscripción de Miembro</h2>
	<form method="POST" enctype="multipart/form-data" action="../model/action/action_inscripcion_m.php">
	<!-- Button trigger modal -->
	<div class="container">
	<hr class="line">
		<div class="col-lg-6"><br><br>
			<img src="../img/perfil.jpg">
			<br>
			<label>
			Cargar Imagen:	
			</label>
			<input type="file" name="imagen" id="imagen"><br>
			<label>Primer Nombre:</label>
			<input type="text"  name="nombre" id="nombre" placeholder="Primer Nombre" class="validate[required] medium form-control" title="Sólo texto" autofocus pattern="[A-Za-z]{3,30}" maxlength="30" required/><br>
			<label>Segundo Nombre:</label>
			<input type="text"  name="nombre" id="nombre" placeholder="Segundo Nombre" class="validate[required] medium form-control" title="Sólo texto" autofocus pattern="[A-Za-z]{3,30}" maxlength="30"><br>
			<label>Primer Apellido:</label>
			<input type="text" name="apellido" id="apellido" placeholder="Primer Apellido" class="validate[required] medium form-control" title="Sólo texto" autofocus pattern="[A-Za-z]{3,30}" maxlength="30" required/><br>
			<label>Segundo Apellido:</label>
			<input type="text" name="apellido" id="apellido" placeholder="Segundo Apellido" class="validate[required] medium form-control" title="Sólo texto" autofocus pattern="[A-Za-z]{3,30}" maxlength="30"><br>
			<label>Fecha de Nacimiento:</label>
			<input type="date"   name="fechaNac" id="fechaNac" placeholder="Fecha" class="validate[required] medium form-control" required>
			<br>
			<label>Género:</label>
			<label>Masculino
			<input type="radio" name="genero" checked="true" value="M">	
			</label>&nbsp;&nbsp;&nbsp;
			<label>Femenino</label>
			<input type="radio" name="genero" value="F">
			<br><br>
			<div class="well well-lg">
			<h2>Dirección</h2>
			<br>
			<label>Departamento</label>
			<select class="combobox form-control" id="departamento" name="departamento">
			</select><br>
			<label>Municipio</label>
			</label>
			<select class="combobox form-control" id="municipio" name="municipio">
			
			</select>

			<br>
			<label>Calle:</label>
			<input type="text"   name="calle" id="calle" placeholder="Calle" class="validate[required] medium form-control" pattern="[a-zA-Z0-9]{5,20}" maxlength="20" required/><br>
			<label>Colonia:</label>
			<input type="text"   name="colonia" id="colonia" placeholder="Colonia" class="validate[required] medium form-control" pattern="[a-zA-Z0-9]{3,20}" maxlength="20"><br>
			<label>No. Casa:</label>
			<input type="text" name="casa" id="casa" placeholder="Número de casa" class="validate[required] medium form-control" pattern="[a-zA-Z0-9]{1,4}" maxlength="4" required/><br>
		</div>
		</div>
		<div class="col-lg-6">
		<br>	
		<br>
		<label>Teléfono Casa:</label>
		<input type="text"  name="telcasa" id="telcasa" placeholder="Teléfono de casa" class="validate[required] medium form-control" pattern="2[0-9]{8}" maxlength="8" required/><br>
		<label>Teléfono Celular:</label>
		<input type="text"  name="telcel" id="telcel" placeholder="Teléfono celular" class="validate[required] medium form-control" pattern="[0-9]{8}" maxlength="8"><br>
		<label>Correo:</label>
		<input type="email" name="email" id="email" placeholder="Correo" class="validate[required] medium form-control" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,30}" maxlength="30"><br>
		<label>DUI:</label>
		<input type="text"  name="dui" id="dui" placeholder="DUI" class="validate[required] medium form-control" pattern="[0-9]{8}[-][0-9]{1}" maxlength="10" required/><br>
		<label>Pasaporte:</label>
		<input type="text"  name="pasaporte" id="pasaporte" placeholder="Pasaporte" class="validate[required] medium form-control"><br>
		<label>No. de grupo:</label><br>
		<select class="combobox form-control" name="grupo" id="grupo">
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
		<br>

		</div>

	</div>

	</form>
		<br><br>
</body>
</html>