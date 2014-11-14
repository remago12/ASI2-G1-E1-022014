<?php
    //Database
  require_once '../model/data/dataBase.php';
  require_once '../model/clases/cUsuario.php';
  require_once '../model/clases/cPerfilG.php';

  session_start();
    // Objetos
     $oUsuario    = new Usuario();
     $perfilG      = new PerfilGrup();
  // revisando sesiones
     if ( $oUsuario->verSession() == true ) {
    if (isset($_SESSION['rol'])) {
        $rol = $_SESSION['rol'];
           if ($rol == "1") {   
          }elseif($rol =="2"){
 
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
  $idG = base64_decode($_GET['id']);

  try{
      $grup = $perfilG->seleccionar_datos($idG);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($grup!=null)
        {
        foreach($grup AS $key => $bl)
        {
        $nomMunic    = $bl['nomMunic'];
        $nomDep      = $bl['nomDep'];
        $numGrup     = $bl['numGrup'];
        $nomGruo     = $bl['nomGruo'];
        $exclGrup    = $bl['exclGrup'];
        $lugReuGrup  = $bl['lugReuGrup'];
        $proLugGrup  = $bl['proLugGrup'];
        $fchaFundGrup = $bl['fchaFundGrup'];
        $lugNacGrup   = $bl['lugNacGrup'];
        $diaReuGrup   = $bl['diaReuGrup'];
        $horaReuGrup  = $bl['horaReuGrup'];
        $limMiemGrup  = $bl['limMiemGrup'];
        $callGrup     = $bl['callGrup'];
        $numCasGrup   = $bl['numCasGrup'];
        $colGrup      = $bl['colGrup'];
        $latGrup      = $bl['latGrup'];
        $lngGrup      = $bl['lngGrup'];
        $estado_idEst = $bl['estado_idEst'];
        $fchaCreaGrup = $bl['fchaCreaGrup'];
        $telgrup      = $bl['telgrup'];
        $nomEst       = $bl['nomEst'];
        ?>
        <tr>
        </tr>
        <?php
        
        }
        }else{
         echo "No hay datos";
        }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Perfil de Grupo</title>
  <script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
  <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed|Francois+One' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es"></script>
  <script type="text/javascript" src="../js/mapa.js"></script>
  <link type="text/css" href="../css/map.css" rel="stylesheet" media="all" />
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
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Solicitudes<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../controller/admin/solicitudes_inscripcion.php">Inscripcion</a></li>
            <li><a href="../controller/admin/solicitudes_renovacion.php">Renovacion</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mantenimientos<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../controller/mantenimiento/padecimiento.php">Padecimiento</a></li>
            <li><a href="../controller/mantenimiento/alergias.php">Alergias</a></li>
          </ul>
        </li>
        <li><a href="../controller/jefeMiembros.php">Miembros</a></li>
        <li><a href=""><img src="..."></a> </li>
        <li><a href="login.php">Bienvenido <?=$usuario?></a></li>
        <li><a href="exit.php">Cerrar Sesion</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">
      <h1 class="text-center">Perfil de Grupo</h1>
    </div>
    <hr class="line"><br>
    <div class="row">
      <div class="col-md-6">
        <h1 class="text-center">Datos del Grupo</h1>
       <label>
          Numero del Grupo:
        </label>
        <label> <?=$numGrup?></label>
        <br>
        <label>
          Nombre del Grupo:
        </label>
        <label> <?=$nomGruo?></label>
        <br>
        <label>
          Exclusivo:
        </label>
        <label> <?=$exclGrup?></label>
        <br>
        <label>
         Lugar de la Reunion:
        </label>
        <label> <?=$lugReuGrup?></label>
        <br>
        <label>
          Propietario del Lugar:
        </label>
        <label> <?=$proLugGrup?></label>
        <br>
        <label>
          Fecha de Fundación:
        </label>
        <label>
          <?=$fchaFundGrup?>
        </label>
        <br>
        <label>
          Lugar de Nacimiento del Grupo:
        </label>
        <label> <?=$lugNacGrup?></label>
        <br>
        <label>
         Dia de Reunion:
        </label>
        <label> <?=$diaReuGrup?></label>
        <br>
        <label>
          Hora de Reunion:
        </label>
        <label> <?=$horaReuGrup?></label>
        <br>
        <label>
          Limite de Miembro:
        </label>
        <label> <?=$limMiemGrup?></label>
        <br>
        <label>
          Departamento:
        </label>
        <label> <?=$nomDep?></label>
        <br>
        <label>
          Municipio:
        </label>
        <label> <?=$nomMunic?></label>
        <br>
        <label>
          Dirección:
        </label>
        <label>
          Colonia <?=$colGrup?> calle <?=$callGrup?> numero de casa <?=$numCasGrup?>
        </label>
        <label>
          Estado del Grupo:
        </label>
        <label> <?=$nomEst?></label>
        <br>
        <label>
          Fecha de Creacion del Grupo:
        </label>
        <label> <?=$fchaCreaGrup?></label>
        <br>
        <label>
          Telefono del Grupo:
        </label>
        <label> <?=$telgrup?></label>
        <br>
      </div>
      <div class="col-md-6">
        <h1 class="text-center">Ubicación</h1>
        <br>
          <div id="map" >
        
          </div>
          <input type="hidden" name="txt_lat" id="txt_lat" class="form-control" value="<?=$latGrup?>">
          <input type="hidden" name="txt_lng" id="txt_lng" class="form-control" value="<?=$lngGrup?>">

      </div>

    </div>
    <br><br>
</div>

<br><br>

</body>
</hmtl>  