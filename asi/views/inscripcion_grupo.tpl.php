
<!DOCTYPE html>
<html>
<head>
	<title>
		Inscripción de Grupo
	</title>
	<meta charset="UTF-8">
	<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/bootstrapValidator.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrapValidator.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="../css/custom.css">
  	<link type="text/css" href="../css/map.css" rel="stylesheet" media="all" />
  	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es"></script>
  	<script type="text/javascript" src="../js/mapa.js"></script>
  	<script type="text/javascript" src="../js/script_combo.js"></script>
  	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed|Francois+One' rel='stylesheet' type='text/css'>
  	
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
        <li><a href="../views/index.html">Inicio</a></li>
        <li><a href="../views/admin/solicitudes_inscripcion.php">Solicitudes</a></li>
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

	<div class="container">
		<form method="POST" action="../model/action/action_nuevo_grupo.php" data-toggle="validator" role="form">
			
		<div class="row">
			<h2 class="text-center">Inscripción de Grupo</h2>
			<hr class="line"><br><br>
			<div class="col-lg-3">
				<label>Nombre de Grupo:</label>
				<input type="text" name="nomGrupo" class="form-control" placeholder="Nombre de Grupo" required/><br>
				<!-- <div class="help-block with-errors">Escribe el nombre de tu nuevo grupo scout</div> -->
				<label>Número de Grupo:</label>
				<input type="number" name="numGrupo" class="form-control" placeholder="Número de Grupo" required/><br>
				<label>Fecha de Fundación:</label>
				<input type="date" name="fechFundacion" class="form-control" required/><br>
				<label>Exclusivo:</label>
				<p>
				<label>Si</label>
				<input type="radio" name="exclusivo" value="S" required/>	
				&nbsp;&nbsp;&nbsp;
				<label>No</label>
				<input type="radio" checked="true" name="exclusivo" value="N" required/>
				<br><br>
				<label>Lugar de Fundación:</label>
				<input type="text" name="LugarFundacion" class="form-control" placeholder="Lugar de Fundación" required/><br>
				<label>Lugar de Reunión:</label>
				<input type="text" name="lugarReunion" class="form-control" placeholder="Lugar de reunión" required/><br>
				<label>
				Dia de Reunión:
				</label>
				<select class="form-control" name="dia_reu">
					<option>
						Lunes
					</option>
					<option>
						Martes
					</option>
					<option>
						Miercoles
					</option>
					<option>
						Jueves
					</option>
					<option>
						Viernes
					</option>
					<option>
						Sábado
					</option>
					<option>
						Domingo
					</option>
				</select><br>
				<label>
				Hora de Reunión:
				</label>
				<input type="time" name="horaReunion" class="form-control" required/><br>		
				<label>Propietario Lugar:</label>
				<input type="text" name="propLugar" class="form-control" placeholder="Propietario del lugar" required/><br>	
				<label>Teléfono:</label>
				<input type="text" name="telefono" class="form-control" placeholder="Teléfono" required/>	
			</div>	
			<div class="col-lg-4"> 
				<label>
					Límite de Miembros:
				</label>
				<input type="number" name="limiteMiem" class="form-control" required pattern="[1]{4}" placeholder="Límite de Miembros" required/><br>
				<label>Departamento</label>
				<select class="combobox form-control" id="departamento" name="departamento" required/>
				<option>Elige tu departamento</option>
				</select><br>
				<label>Municipio</label>
				<select class="combobox form-control" id="municipio" name="municipio" required/>
				<option>Elige tu municipio</option>
				</select>
				<br>	
				<label>Calle:</label>
				<input type="text" name="calle" class="form-control" placeholder="Calle" required/>
				<br>	
				<label>Colonia:</label>
				<input type="text" name="colonia" class="form-control" placeholder="Colonia" required/>
				<br>
				<label>Número de Casa:</label>
				<input type="text" name="numCasa" class="form-control" placeholder="Número de Casa" required/>
				<br>
				
				<br>
			</div>
			<div class="col-lg-4">
					<div id="map" >
				
					</div>
					<input type="hidden" name="txt_lat" id="txt_lat" class="form-control">
					<input type="hidden" name="txt_lng" id="txt_lng" class="form-control">
					<br>
					<a href="grupos_scout.html" class="btn btn-primary btn-lg" role="button">Cancelar</a>
					<button value="Guardar" class="btn btn-primary">Guardar</button>
					<br>
					<br>
			</div>
		</div>		
			
		</form>

	</div>
<br><br><br>
</body>
</html>