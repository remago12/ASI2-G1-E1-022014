<?php
  require_once '../model/data/dataBase.php';
  require_once '../model/clases/cUsuario.php';
  session_start();
  $oUsuario = new Usuario();
  
    
  if ( $oUsuario->verSession() == true ) {
    if (isset($_SESSION['rol'])) {
        $rol = $_SESSION['rol'];
           if ($rol == "1") {
             header("Location: ../controller/indexAdmin.tpl.php");
            exit();
          }elseif ($rol== "2") {
             header("Location: ../controller/indexJefe.php");
             exit();
          }elseif ($rol== "3") {
             header("Location: ../controller/perfilUsuario.php");
            exit();
          }else{
             header("Location: ../controller/login.php");
            exit(); 
          }
        }
    }
  
  if ( (isset($_POST['username'])) && (isset($_POST['password'])) ) 
  {
    $user = $_POST['username'];
    $psw  = $_POST['password'];
    $paramsUser = array($user, $psw);
    $login = $oUsuario->ingreso($paramsUser);
 
    if ($login){
      if (isset($_SESSION['rol'])) {
        $rol = $_SESSION['rol'];
           if ($rol == "1") {
             header("Location: ../controller/indexAdmin.tpl.php");
            exit();
          }elseif ($rol== "2") {
             header("Location: ../controller/indexJefe.php");
             exit();
          }elseif ($rol== "3") {
             header("Location: ../controller/perfilUsuario.php");
            exit();
          }else{
             header("Location: ../controller/login.php");
            exit(); 
          }
        }
    }else {
      header("Location: ../controller/login.php");
    }

  }
?>
<!DOCTYPE html>
<?php 
  $link = mysql_connect("localhost", "asi2", "equipo1") or die("Could not connect: " . 
  mysql_error());
  mysql_selectdb("scout",$link) or die ("Can't use dbmapserver : " . mysql_error());
?>

<html lang="es">
<head>
	<title>
	Login
	</title>
  <meta http-equiv="content-type" content="text/html" charset="UTF-8"/>
  <script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link type="text/css" href="../css/mapLog.css" rel="stylesheet" media="all" />
  <script src="http://maps.google.com/maps/api/js?v=3&sensor=false" type="text/javascript"></script>
  <script type="text/javascript" src="../js/script_combo.js"></script>
  <!--<script type="text/javascript" src="../js/mapLog.js"></script>-->

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
        <!--<li><a href="#">Link</a></li>-->
        
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>-->
        <li class="nohov"><a href="../controller/inscripcion_miem.php"> <button class="btn btn-default">Regístrate</button></a></li>
        <li class="nohov"> <a href="" data-toggle="modal" data-target="#myModal"><button class="btn btn-default">Ingresar</button></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 

        
  
    <div class="row">
      <div class="col-md-2">
        <div class="panel panel-default">
          <div class="panel-heading">Buscar por:</div>
          <div class="panel-body">
            <form>
              <label>
                Departamento:
              </label>
              <select class="combobox form-control" id="departamento" name="departamento" required/>
                <option>Elige tu departamento</option>
              </select><br>
              <label>Municipio:</label>
              <select class="combobox form-control" id="municipio" name="municipio" required/>
                <option>Elige tu municipio</option>
              </select>
              
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-10">
        <div id="map" >
        </div>
        <input type="hidden" name="c_x" class="form-control" id="txt_lat" placeholder="Coordenadas en x">
        <input type="hidden" name="c_y" class="form-control" id="txt_lng" placeholder="Coordenadas en y">    
      </div>
    </div>
            <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="myModalLabel">Iniciar Sesión</h3>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">

                <form method="POST" data-toggle="validator" role="form">

                  <label>
                    Usuario:
                  </label>
                  <input type="text" placeholder="Usuario" name="username" id="username" class="form-control" required/>
                  <label>
                    Contraseña:
                  </label>
                  <input type="password" placeholder="Contraseña" name="password" id="password" class="form-control" required/>
                  <div class="modal-footer">

                    <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button value="Entrar" class="btn btn-primary">Entrar</button>
                    <a href="../controller/inscripcion_miem.php">Regístrate</a>
                    <p><p><a href="#">¿Has olvidado tu contraseña?</a>
                  </div>
                </form>
              </div>  
            </div>
          </div>
        </div>
      </div>

      <script type="text/javascript">
    var locations = [
      <?php

      $query = mysql_query("SELECT * FROM grupo");
           while ($row = mysql_fetch_array($query)){
             $name=$row['nomGruo'];
             $lat=$row['latGrup'];
             $lon=$row['lngGrup'];
             
             echo ("['$name',$lat,$lon],");
           }

      ?>
    ];

    var img = new google.maps.MarkerImage("../img/scouts.png");

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(13.692357315058082, -89.21998257812504),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: img
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
  </body>

  
</html>
