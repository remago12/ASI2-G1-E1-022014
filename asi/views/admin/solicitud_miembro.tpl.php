<!DOCTYPE html>
<html>
<head>
	<title>Solicitud de Miembro</title>

	<script type="text/javascript" src="../../js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="../../css/custom.css">
  	<script type="text/javascript" src="../../js/inscripcion.js"></script>
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
        <li><a href="../indexadmin.html">Inicio</a></li>
        <li><a href="solicitudes_inscripcion.html">Inscripciones</a></li>
        <li><a href="solicitudes_renovacion.html">Renovación</a></li>
        <li><a href="../grupos_scout.html">Grupos Scout</a></li>
        <li><a href="../miembros_scout.html">Miembros Scout</a></li>
        <img id="logo2" src="../../img/logo1.png" class="img-responsive" alt="Responsive image">
      </ul>

    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
	</nav>
		<h1 class="text-center">Solicitud de Miembro</h1>
		<div class="container">
		
		<div class="row">
			
			<div class="col-lg-2"><br/><br/>
			<img src="../../img/perfil.jpg">
			</div>
			<hr class="line">
			<div class="col-lg-4">
			<input type="text"   name="idPersona" id="idPersona" placeholder="idPersona" class="validate[required] medium form-control"><br>
			<div name="NIS" id="NIS">
			</div>
			<div name='nombre' id="nombre">
				</div>
				<div name="apellido" id="apellido">
				</div>
				<div name="DUI" id="DUI">
				</div>
				<div name="fecna" id="fecna">
				</div>
				<div name="telcel" id="telcel">
				</div>
				<label>Teléfono de Casa:</label>
				22345679 
				<br>
				<label>Género:</label>
				Masculino 
				<br>
				<label>Dirección:</label>
				Barrio San Juan, Calle los pinos, pasaje  10 , casa #7 
				<br>
				
				</div>
			<div class="col-lg-4">
				<label>Grupo Solicitado:</label>
				8 
			</div><br>
			<div class="col-lg-4">
				<label>Comprobante de Pago:</label>
				<br>
				<img src="../../img/Davivienda.jpg" class="img-responsive">
				<br>
			<button class="btn btn-success">Guardar</button>	
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-4">
				<label>Exento de pago:</label>
				<input type="checkbox" >
				<br>
				<label>Comentario:</label>
				<br>
				<textarea>
					
				</textarea>
				<br>
				<label>
				Estado de la Solicitud:
				</label>
				<br>
				<select>
					<option>Espera</option>
					<option>Denegado</option>
					<option>Aceptada</option>
				</select>
			</div>
			
		</div>	

		</div>
		<br/><br/><br/><br/>
</body>
</html>