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
      <img id="logo1" src="../img/ases1.jpg" class="img-responsive" alt="Responsive image">
      <a class="navbar-brand" href="#"><h3>SCOUT</h3>El Salvador</a>
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
	<div class="container">
		<h2 class="text-center">Grupos Scout</h2>
		<hr class="line"><br>		
		<div class="row">
			<div class="col-lg-4">
				<a href="inscripcion_de_grupo.html" class="btn btn-primary btn-lg" role="button">Agregar un Nuevo Grupo</a>
			</div>
			<div class="col-lg-4 col-lg-offset-4">
				<input type="text" class="form-control" placeholder="Búsqueda" value="">
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
		</div>
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
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
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