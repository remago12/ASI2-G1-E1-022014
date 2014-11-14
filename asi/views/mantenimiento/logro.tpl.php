<?php
    //Database
  require_once '../../model/clases/cCuadro_Clinico.php';
  require_once '../../model/data/dataBase.php';
  require_once '../../model/clases/cUsuario.php';
  require_once '../../model/clases/cPerfil.php';

  session_start();
    // Objetos
    $oUsuario   = new Usuario();
    $perfil     = new Perfil();
    $cuadroC    =new CuadroClinico();

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
	<title>Logros</title>
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
        <li><a href="../../views/index.html">Inicio</a></li>
        <li><a href="../../views/admin/solicitudes_inscripcion.php">Solicitudes</a></li>
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
        <li><a href="">Oscar Lizama</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cerrar Sesion<span class="caret"></span></a>
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
  

    <form method="POST" action="../../model/action/action_logro.php">
    <div class="container">
      <div class="row">          
            <h1 class="text-center">Listado de Logros</h1>
            <hr class="line">
            <br><br>
            <div class="col-md-4">            
            <label>
              Nombre:
            </label> 
            <input type="text" class="form-control" name="nomLogro" required/>
            <br>
            <button class="btn btn-success" >Logros</button>
          </div>
          </form>
          <div class="col-md-4">
          <table class="table table-hover">
              <thead>
            <tr>
              <th>Nombre del Logro</th>
            </tr>
            <label>Requisito:</label>
      <select id="estilo_select" name="idReqLogro" class="form-control">
      <option value="1">Sin Requisito</option>
                                     <?php
                          
                          $requisito = $cuadroC->seleccionar_logro(); 
                          if($requisito !=null){
                          foreach ($requisito AS $key => $info) {
                           echo '<option value='.$info["idLogro"].'>'.$info["nomLogro"].'</option>';
                            } 
                          }else{
                           echo '<option value="">No se encontro..</option>';
                          }
                                    ?>
                                    
                                </select>
          </thead>
          <tbody>
          <?php 
      try{
      $cuadro = $cuadroC->seleccionar_logro();
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($cuadro!=null)
        {
        foreach($cuadro AS $key => $bl)
        {
        $nomLogro      = $bl['nomLogro'];
        $idLogro       = $bl['idLogro'];
        $idReqLogro    = $bl['idReqLogro'];
        ?>
              <tr>
        <td>
        <?=$nomLogro?>
        </td>
                  <a href="mod_estado.php?id=<?=base64_encode($idEst)?>">Editar</a>
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