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
		Solicitudes de Renovación
	</title>

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
	<div class="container">
		<h2 class="text-center">Solicitudes de Renovación</h2>
		<hr class="line">
		<div class="row">
			<div class="col-lg-2">
				<input type="text" placeholder="Buscar" class="form-control">
			</div>
			<div class="col-log-2">
				<label>
					Numero de Grupo
				</label>
				<select class="form-control">
					<option>
						
					</option>
				</select>
			</div>
			<div class="col-log-3">
				<label>
					Estado
				</label>
				<select class="form-control">
					<option>
						
					</option>
				</select>
			</div>
			<div class="col-log-2">
				<label>
					Departamento
				</label>
				<select class="form-control">
					<option>
						
					</option>
				</select>
			</div>
			<div class="col-log-2">
				<label>
					Municipio
				</label>
				<select class="form-control">
					<option>
						
					</option>
				</select>
			</div>		
		</div><br>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Nombre Completo</th>
							<th>Edad</th>
							<th>Género</th>
							<th>Usuario</th>
							<th>No. de Grupo</th>
							<th>Cargo</th>
							<th>Cargo Nacional</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
							<a href="renovacion.html">Oscar Antonio Lizama Mejía</a>
							</td>
							<td>
								20
							</td>
							<td>
								Masculino
							</td>
							<td>
								LM000114
							</td>
							<td>
								21
							</td>
							<td>
								Lobato
							</td>
							<td>
								----
							</td>
						</tr>
							<tr>
							<td>
							Carlos Antonio Rivas Murcia
							</td>
							<td>
								19
							</td>
							<td>
								Masculino
							</td>
							<td>
								7
							</td>
							<td>
								09998882-9
							</td>
						</tr>

					</tbody>
				</table>
			</div>				
		</div>

		</div>
	</div>
</body>
</html>