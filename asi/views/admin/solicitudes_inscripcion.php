<?php
    //Database
	require_once '../../model/clases/cInscripcion.php';
	require_once '../../model/data/dataBase.php';
  require_once '../../model/clases/cUsuario.php';
  require_once '../../model/clases/cPerfil.php';
     session_start();
     //Objetos
     $oInscripcion   = new Inscripcion();
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
		Solicitudes de Inscripción
	</title>
	<script type="text/javascript" src="../../js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="../../css/custom.css">
      <script type="text/javascript" src="../../js/script_combo_admin.js"></script>
      <script type="text/javascript" src="../../js/solicitudes.js"></script>
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
      <img id="logo2" src="../../img/logo1.png" class="img-responsive hidden-xs hidden-sm" alt="Responsive image">
      

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <!--solo tienen que   copiar la siguiente linea para generar mas items -->
        <li><a href="../../controller/login.php">Inicio</a></li>
        <li><a href="../../controller/miembrosGrupo.php">Miembros</a> </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Solicitudes<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../admin/solicitudes_inscripcion.php">Inscripcion</a></li>
            <li><a href="../admin/solicitudes_renovacion.php">Renovacion</a></li>
            
          </ul>
        </li>
    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mantenimiento<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../../controller/mantenimiento/manBanco.php">Banco</a></li>
            <li><a href="../../controller/mantenimiento/alergias.php">Alergias</a></li>
            <li><a href="../../controller/mantenimiento/padecimiento.php">Padecimientos</a></li>
            <li class="divider"></li>
            <li><a href="../../controller/mantenimiento/estado.php">Estado</a></li>
          </ul>
        </li>
        <li><a href=""><img src="..."></a> </li>
        <li><a href=""><?=$usuario?></a></li>
        <li><a href="../exit.php">Cerrar Sesion</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="container">
		<h1 class="text-center">Solicitudes de Inscripción</h1>
		<hr class="line">
		<div class="row">
			<div class="col-md-3 ">
        <label>Numero del Grupo:</label>
        <select class="form-control" name="grupo" id="grupo">
        <option >
        Seleccione un grupo            
        </option>
        </select>
        
      </div>
      <div class="col-md-3 ">
        <label>Estado:</label>
          <select class="form-control" id="estado" name="estado">
          <option >
        Seleccione un estado            
        </option>
          </select>
      </div> 
		
      <div class="col-md-3">
        <label>
          Departamento: 
        </label>
          <select class="form-control" name="departamento" id="departamento"> 
            <option >
        Seleccione un departamento            
        </option> 
          </select>
      </div>
      <div class="col-md-3">
        <label>
          Municipio: 
        </label>
          <select class="form-control" name="municipio" id="municipio">
          <option value="%" >Selecciona un municipio</option> 
          </select>
      </div>
      
    </div>
		<br>
		<div class="row">
			<div class="col-lg-12 ">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Numero de solicitud</th>
							<th>Nombre</th>
							<th>Género</th>
							<th>Edad</th>
							<th>Numero de Grupo</th>
              <th>Departamento</th>
              <th>Municipio</th>
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

		</div>
</body>
</html>
