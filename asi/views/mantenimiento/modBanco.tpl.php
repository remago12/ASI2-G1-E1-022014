<?php
   //Database
require_once '../../model/clases/cUsuario.php';
require_once '../../model/clases/cPerfil.php';
require_once '../../model/data/dataBase.php';
require_once '../../model/clases/cBancSql.php';

session_start();
    // Objetos
    $oUsuario   = new Usuario();
    $perfil     = new Perfil();
    $banco      = new Banco();
  
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

  $idE = base64_decode($_GET['id']);
      try{
      $banc = $banco->seleccionar_banco1($idE);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($banc!=null)
        {
        foreach($banc AS $key => $bl)
        {
    
        $nomBanco       = $bl['nomBanc'];
        $numCuenta      = $bl['numCuentaBanc'];
        $idBanc         = $bl['idBanc']; 
        }
        }else{
         echo "No hay datos";
        }
        ?>
<!DOCTYPE html>
<html>
<head>
	<title>Solicitud de Miembro</title>
  <script type="text/javascript" src="../../js/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../../css/custom.css">
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
      <div class="row">
            <h1 class="text-center">Listado de Bancos</h1>
          <div class="col-md-4">
            <select class="form-control">
              <option>
                Nuevo Banco
              </option>
              <option>
                Banco Davivienda
              </option>
            </select><br>
          <form action="../../model/action/acModBanco.php" method="POST">
              <label>
                Nombre:
              </label> 
              <input type="text" class="form-control" name="nomBanco" value="<?=$nomBanco?>">
              <label>
                Número de Cuenta:
              </label>
              <input type="text" class="form-control" name="numCuenta" value="<?=$numCuenta?>">
              <input type="hidden" name="idBanc" value="<?=$idBanc?>">
              <br>
              <button class="btn btn-success" >Guardar</button>
          </form>  
          </div>
          <div class="col-md-4">
            <table class="table table-hover">
              <thead>
            <tr>
              <th>Nombre de Banco</th>
              <th>Numero De Cuenta</th>
            </tr>
          </thead>
          <tbody>
              <?php 
      try{
      $banc = $banco->seleccionar_banco();
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($banc!=null)
        {
        foreach($banc AS $key => $bl)
        {
        $nomBanco       = $bl['nomBanc'];
        $numCuenta      = $bl['numCuentaBanc'];
        $idBanc         = $bl['idBanc'];
        ?>
              <tr>
        <td>
        <?=$nomBanco?>
        </td>
                <td>
        <?=$numCuenta?>
        </td>
        <td>
          <a href="modBanco.php?id=<?=base64_encode($idBanc)?>">Editar</a>
        </td>
        </tr>
        <?php
        
        }
        }else{
         echo "No hay datos";
        }
        
        
        ?> 
          </tbody>
        </table>
            
          </div>        
      </div>
    </div>
</body> 
<html>