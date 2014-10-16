
<!DOCTYPE html>
<html>
<head>
	<title>
		Inscripcion de Grupo
	</title>

	<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="css/custom.css">
  	<link type="text/css" href="css/map.css" rel="stylesheet" media="all" />
  	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es"></script>
  	<script type="text/javascript" src="js/mapa.js"></script>
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
      <img id="logo1" src="img/ases1.jpg" class="img-responsive hidden-xs hidden-sm" alt="Responsive image">	
      

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      	<!--solo tienen que   copiar la siguiente linea para generar mas items -->
        <li><a href="#">Link</a></li>
        <img id="logo2" src="img/logo1.png" class="img-responsive hidden-xs hidden-sm" alt="Responsive image">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
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
		<form method="POST">
			
		<div class="row">
			<h2 class="text-center">Inscripcion de Grupo</h2>
			<div class="col-lg-3">
				<label>Nombre de Grupo:</label>
				<input type="text" name="nomGrupo" class="form-control">
				<label>Numero de Grupo:</label>
				<input type="text" name="numGrupo" class="form-control">
				<label>Fecha de Fundacion</label>
				<input type="date" name="fechFundacion" class="form-control">
				<label>Exclusivo:</label>
				<br>
				<label>
				Si	
				<input type="radio" checked="false" name="exclusivo">	
				</label>
				<label>
				No	
				<input type="radio" checked="true" name="exclusivo">	
				</label>
				<br>
				<label>
					Lugar de Fundacion:
				</label>
				<input type="text" name="LugarFundacion" class="form-control">
				<label>Lugar de Reunion:</label>
				<input type="text" name="lugarReunion" class="form-control">
				<label>
					Dia de Reunion:
				</label>
				
				<select class="form-control">
					<option>
						Sabado
					</option>
					<option>
						Domingo
					</option>
				</select>
				<label>
					Hora de Reunion:
				</label>
				<input type="text" name="horaReunion" class="form-control">		
				<label>Propietario Lugar:</label>
				<input type="text" name="propLugar" class="form-control">	
				<label>Telefono:</label>
				<input type="text" name="telefono" class="form-control">	
			</div>	
			<div class="col-lg-4"> 
				<label>
					Limite de Miembros:
				</label>
				<input type="text" name="limiteMiem" class="form-control">
				<label>Municipio:</label><br>
				<select class="form-control">
					<option>
						San Marcos
					</option>
					<option>
						San Salvador
					</option>
						
				</select>
				<br>
				<br>
				<label>Departamento:</label>
					<select class="form-control"><br>
						<option>San Salvador</option>
						<option>La Libertad</option>
					</select>
				<br>	
				<label>Calle:</label>
				<input type="text" name="calle" class="form-control">
				<br>	
				<label>Colonia:</label>
				<input type="text" name="colonia" class="form-control">
				<br>
				<label>Numero de Casa:</label>
				<input type="text" name="numCasa" class="form-control">
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
					<a href="grupos_scout.html" class="btn btn-primary btn-lg" role="button">Guardar</a>
					<br>
					<br>
			</div>
		</div>		
			
		</form>

	</div>

</body>
</html>