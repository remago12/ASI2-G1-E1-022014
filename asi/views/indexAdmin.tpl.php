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
             header("Location: login.tpl.php");
            exit(); 
          }
        }else{
          header("Location: login.tpl.php");
          exit();
        }
    }else{
      header("Location: login.tpl.php");
          exit();
    }
    
  $usuario  = $_SESSION['usuario'];
  ?>
<!DOCTYPE html>
<html>
<head>

	<title>
	Inicio
	</title>
  <script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery-ui.js"></script>
  <script type="text/javascript" src="../js/indexefe.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
  <link href='http://fonts.googleapis.com/css?family=Jura:400,500' rel='stylesheet' type='text/css'>
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
        <li><a href="../controller/admin/solicitudes_inscripcion.php">Solicitudes</a> </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mantenimiento<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../controller/mantenimiento/manBanco.tpl.php">Banco</a></li>
            <li><a href="../controller/mantenimiento/alergias.tpl.php">Alergias</a></li>
            <li><a href="../controller/mantenimiento/padecimiento.tpl.php">Padecimientos</a></li>
            <li class="divider"></li>
            <li><a href="../controller/mantenimiento/estado.tpl.php">Estado</a></li>
          </ul>
        </li>
        <li><a href=""><img src="..."></a> </li>
        <li><a href=""><?=$usuario?></a></li>
        <li><a href="exit.php">Cerrar Sesion</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


  <div class="container">
    <div class="row ">
        <div class="col-md-6 col-sm-12  col-xs-12">
          <div class="row">
            <div  class="col-md-11 col-sm-12 col-xs-12 borde box1 box">
              <a class="cos" href="">
                <div id="uno" class="row borde box">
                  <h2 class="encabezado">Solicitudes</h2>
                </div>
               </a>
               <a href="../controller/admin/solicitudes_inscripcion.php">Solicitudes</a>
            </div>
            <div  class="col-md-11 col-sm-12 col-xs-12 borde box1 box3">
              <a class="cos" href="">
              <div id="dos" class="row borde box3">
                  <h2 class="encabezado">Grupos</h2>
              </div>  
              </a>
              <a href="../controller/nuevo_grupo.php">Inscripción de Grupo</a>
              <br>
              <a href="../controller/gruposScout.tpl.php">Grupos Scout</a>
            </div>
          </div>  
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="row">
            <div  class="col-md-11 col-sm-12 col-xs-12 borde box2 box4">
              <a class="cos" href="">
              <div id="tres" class="row borde box4">
                <h2 class="encabezado">Miembros</h2>
              </div> 
              </a>
              <a href="">Miembros </a>
            </div>
            <div  class="col-md-11 col-sm-12 col-xs-12 borde box2 box5">
              <a class="cos" href="">
              <div id="cuatro" class="row borde box5">
                <h2 class="encabezado">Mantenimiento</h2>
              </div>
              </a>
              <a href="../controller/mantenimiento/manBanco.php">Banco</a>
              <br>
              <a href="../controller/mantenimiento/padecimiento.php">Padecimiento</a>
              <br>
              <a href="../controller/mantenimiento/alergias.php">Alergia</a>
              <br>
              <a href="../controller/mantenimiento/estado.php">Estados</a>
            </div>
          </div>
        </div>
    </div>
  </div>      
</body>
</html>