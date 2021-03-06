<?php
    //Database
  require_once '../model/data/dataBase.php';
  require_once '../model/clases/cUsuario.php';
 
  session_start();
    // Objetos
     $oUsuario   = new Usuario();
    // revisando sesiones 
    
    if ( $oUsuario->verSession() == true ) {
    if (isset($_SESSION['rol'])) {
        $rol = $_SESSION['rol'];
           if ($rol == "1") {   
          }else{
             header("Location: login.php");
            exit(); 
          }
        }else{
          header("Location: login.php");
          exit();
        }
    }else{
      header("Location: login.php");
          exit();
    }
    
  $usuario  = $_SESSION['usuario'];
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Miembros de Grupo
	</title>
	<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/confirm.js"> </script>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
  <script type="text/javascript" src="../js/script_combo.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed|Francois+One' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="../js/miembros.js"></script>
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
        <li><a href="login.php">Inicio</a></li>
        <li><a href="../controller/miembrosGrupo.php">Miembros</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Solicitudes<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../controller/admin/solicitudes_inscripcion.php">Inscripcion</a></li>
            <li><a href="../controller/admin/solicitudes_renovacion.php">Renovacion</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mantenimiento<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../controller/mantenimiento/manBanco.php">Banco</a></li>
            <li><a href="../controller/mantenimiento/alergias.php">Alergias</a></li>
            <li><a href="../controller/mantenimiento/padecimiento.php">Padecimientos</a></li>
            <li class="divider"></li>
            <li><a href="../controller/mantenimiento/estado.php">Estado</a></li>
          </ul>
        </li>
        <li><a href=""><img src="..."></a> </li>
        <li><a href="login.php">Bienvenido <?=$usuario?></a></li>
        <li><a href="exit.php">Cerrar Sesion</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="row">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
      <h1 class="text-center">Miembros de Grupo.</h1> 
          <hr class="line">
          
        </div>
      </div>
      <div class="col-lg-8 col-lg-offset-1">
        <div class="row">

          <div class="col-lg-1">
            <label>NIS:</label>
            <input type="text" id="nis" name="nis" class="form-control">
          </div>
         <div class="col-lg-3">
            <label> Departamento:</label>
            <select class="form-control" name="departamento" id="departamento">
              <option>
              Seleccione un departamento
              </option>      
            </select>

          </div>
          <div class="col-lg-3">
            <label>Municipio:</label>
            <select class="form-control" name="municipio" id="municipio">
              <option>
              Selecciona un municipio
              </option>      
            </select>
          </div>

          
          </div>
          <div class="row">
            <div class="col-lg-3">
            <label>Numero de Grupo:</label>
            <select class="form-control" name="grupo" id="grupo">
              <option>
                Seleccione un grupo
              </option>  
            </select>  

          </div>
          <div class="col-lg-2">
            <label>Genero:</label>
            <select class="form-control" name="Genero" id="Genero">
            <option>
                Elija Genero
              </option>
              <option>
                Masculino
              </option>
               <option>
                Femenino
              </option>   
            </select>

  
          </div>
          
           <div class="col-lg-3">
            <label>Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre">    
          </div> 
          <div class="col-lg-3">
            <label>Apellido:</label>
            <input type="text" class="form-control" name="apellido" id="apellido">    
          </div>               
        </div>
        <table class="table table-striped">
					<thead>
						<tr>
							<th>NIS</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Género</th>
							<th>Edad</th>
                <th>Departamento</th>
                  <th>Municipio</th>
							<th>Número de Grupo</th>
							<th>Ver Perfil</th>
						</tr>
					</thead>
					<tbody name="loop" id="loop">
					</tbody>
				</table>
         <ul class="paginacion text-center" >
          </ul>
			</div>





</body>
</html>