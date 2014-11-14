<?php
    //Database
  require_once '../model/data/dataBase.php';
  require_once '../model/clases/cUsuario.php';
  require_once '../model/clases/cPerfil.php';
  require_once '../model/clases/cBancSql.php';
 
  session_start();
    // Objetos
     $oUsuario   = new Usuario();
     $perfil     = new Perfil();
     $banco      = new Banco();
     $url= "";
     $year= date("y");
    // revisando sesiones 
    
    if ( $oUsuario->verSession() == true ) {
    if (isset($_SESSION['rol'])) {
        $rol = $_SESSION['rol'];
           if ($rol == "3") {   
          }else{
             header("Location: ../controller/login.php");
            exit(); 
          }
        }else{
          header("Location: ../controller/login.php");
          exit();
        }
    }else{
      header("Location: ../controller/login.php");
          exit();
    }
   
    
  $usuario  = $_SESSION['usuario'];

      try{
      $cuadro = $perfil->seleccionar_datos($usuario);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($cuadro!=null)
        {
        foreach($cuadro AS $key => $bl)
        {
        $idPer       = $bl['idPersona'];  
        $nomPer      = $bl['nomPer'];
        $apelPer     = $bl['apelPer'];
        $genPer      = $bl['genPer'];
        $fechNacPer  = $bl['fechNacPer'];
        $telPer      = $bl['telPer'];
        $celPer      = $bl['celPer'];
        $corrPer     = $bl['corrPer'];
        $fotPer      = $bl['fotPer'];
        $callPer     = $bl['callPer'];
        $numCasPer   = $bl['numCasPer'];
        $colPer      = $bl['colPer'];
        $municipio_idMunic      = $bl['municipio_idMunic'];
        $nomMunic    = $bl['nomMunic'];
        $nomDep      = $bl['nomDep'];
        $nisMiem     = $bl['nisMiem'];
        $polizaSegMiem      = $bl['polizaSegMiem'];
        $certMiem    = $bl['certMiem'];
        $fotPer      = $bl['fotPer'];
        
        ?>
        <tr>
        </tr>
        <?php
        
        }
        }else{
         echo "No hay datos";
        }

       try{
      $grup = $perfil->seleccionar_grupop($usuario);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($grup!=null)
        {
        foreach($grup AS $key => $bl)
        {
        $idGrup      = $bl['idGrup'];
        $nomMunic1    = $bl['nomMunic'];
        $nomDep1      = $bl['nomDep'];
        $numGrup     = $bl['numGrup'];
        $nomGruo     = $bl['nomGruo'];
        $lugReuGrup  = $bl['lugReuGrup'];
        $diaReuGrup  = $bl['diaReuGrup'];
        $horaReuGrup = $bl['horaReuGrup'];
        $callGrup    = $bl['callGrup'];
        $numCasGrup  = $bl['numCasGrup'];
        $colGrup     = $bl['colGrup'];
        $telgrup     = $bl['telgrup'];
        ?>
        <tr>
        </tr>
        <?php
        
        }
        }else{
         echo "No hay datos";
        }

        try{
      $estado = $perfil->seleccionar_estado($usuario);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($estado!=null)
        {
        foreach($estado AS $key => $bl)
        {
        $estado      = $bl['estado_idEst'];
        ?>
        <tr>
        </tr>
        <?php
        
        }
        }else{
         echo "No hay datos";
        } 
        try{
      $estad = $perfil->seleccionar_estadoI($usuario);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($estad!=null)
        {
        foreach($estad AS $key => $bl)
        {
        $estadoI      = $bl['estado_idEst'];
        ?>
        <tr>
        </tr>
        <?php
        
        }
        }else{
         echo "No hay datos";
        }

        try{
      $esta = $perfil->seleccionar_estadoR($usuario);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($esta!=null)
        {
        foreach($esta AS $key => $bl)
        {
        $estadoR      = $bl['estado_idEst'];
        ?>
        <tr>
        </tr>
        <?php
        
        }
        }else{
         echo "No hay datos";
        } 

         try{
      $ins = $perfil->seleccionar_inscripcion($usuario);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($ins!=null)
        {
        foreach($ins AS $key => $bl)
        {
        $inscripcion      = $bl['numSolicInsc'];
        ?>
        <tr>
        </tr>
        <?php
        
        }
        }else{
         echo "No hay datos";
        }

       try{
      $ins = $perfil->seleccionar_renovacion($usuario);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($ins!=null)
        {
        foreach($ins AS $key => $bl)
        {
        $renovacion      = $bl['numSolRen'];
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
	<title>
		Perfil Usuario
	</title>
	<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="../css/custom.css">
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
      <img id="logo2" src="../img/logo1.png" class="img-responsive hidden-xs hidden-sm" alt="Responsive image">
      

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <!--solo tienen que   copiar la siguiente linea para generar mas items -->
        <li><a href=""><img id="user" src="<?=$fotPer?>"></a> </li>
        <li><a href="../index.html">Inicio</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mantenimiento<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Banco</a></li>
            <li><a href="#">Alergias</a></li>
            <li><a href="#">Padecimiento</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li><a href="">Bienvenido <?=$nomPer?> <?=$apelPer?></a></li>
      	<li><a href="exit.php">Cerrar Sesion</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="container">
		<div class="row">
			<h1 class="text-center">Perfil de Usuario</h1>
			<div class="col-md-4">
      <br>
          <tr><td><img src="<?=$fotPer?>"></td></tr>       
        <br>
				<label>
					Nombre:
				</label>
				<br>
					<tr><td><?=$nomPer?></td></tr>
          <tr><td><?=$apelPer?></td></tr>				
				<br>
				<label>
          Genero:
        </label>
        <br>
          <tr><td><?=$genPer?></td></tr>       
        <br>
				<label>
          Fecha Nacimiento:
        </label>
        <br>
          <tr><td><?=$fechNacPer?></td></tr>       
        <br>
        <label>
          Telefono:
        </label>
        <br>
          <tr><td><?=$telPer?></td></tr>       
        <br>
        <label>
          Celular:
        </label>
        <br>
          <tr><td><?=$celPer?></td></tr>     
        <br>
        <label>
          Correo:
        </label>
        <br>
          <tr><td><?=$corrPer?></td></tr>      
        <br>
        <label>
          Departamento:
        </label>
        <br>
          <tr><td><?=$nomDep?></td></tr>      
        <br>
        <label>
          Municipio:
        </label>
        <br>
          <tr><td><?=$nomMunic?></td></tr>      
        <br>
        <label>
          Direccion:
        </label>
        <br>
          <tr><td>colonia</td></tr>
          <tr><td><?=$colPer?></td></tr> 
          <tr><td>calle</td></tr>
          <tr><td><?=$callPer?></td></tr>
          <tr><td>casa #</td></tr> 
          <tr><td><?=$numCasPer?></td></tr>       
        <br>

			</div>
			<div class="col-md-4">
				<label>
          NIS:
        </label>
        <br>
          <tr><td><?=$nisMiem?></td></tr>      
        <br>
        <label>
          Poliza:
        </label>
        <br>
          <tr><td><?=$polizaSegMiem?></td></tr>      
        <br>
        <label>
          Certificacion:
        </label>
        <br>
          <tr><td><?=$certMiem?></td></tr>      
        <br>
        <label>
          Numero de Grupo:
        </label>
        <br>
          <tr><td><?=$numGrup?></td></tr>      
        <br>
        <label>
          Nombre del Grupo:
        </label>
        <br>
          <tr><td><?=$nomGruo?></td></tr>      
        <br>
        <label>
          Lugar de Reunion:
        </label>
        <br>
          <tr><td><?=$lugReuGrup?></td></tr>      
        <br>
        <label>
          Dia de Reunion:
        </label>
        <br>
          <tr><td><?=$diaReuGrup?></td></tr>      
        <br>
        <label>
          Hora de la Reunion:
        </label>
        <br>
          <tr><td><?=$horaReuGrup?></td></tr>      
        <br>
        </div>
			<div class="col-md-4">
      <label>
          Departamento:
        </label>
        <br>
          <tr><td><?=$nomDep1?></td></tr>      
        <br>
        <label>
          Municipio:
        </label>
        <br>
          <tr><td><?=$nomMunic1?></td></tr>      
        <br>
        <label>
          Direccion:
        </label>
        <br>
          <tr><td>Colonia</td></tr>
          <tr><td><?=$colGrup?></td></tr>
          <tr><td>Calle</td></tr>
          <tr><td><?=$callGrup?></td></tr>
          <tr><td>Casa #</td></tr>
          <tr><td><?=$numCasGrup?></td></tr>      
        <br>
        <label>
          Telefono de Grupo:
        </label>
        <br>
          <tr><td><?=$telgrup?></td></tr>      
        <br>
        <?php 
         if ($estado == 13){
           echo '<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">';
           echo 'Validar Renovacion';
       echo '</button>';
       $url="../model/action/action_renovacion.php";
        }elseif($estado == 12){
           echo '<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">';
          echo 'Validar Inscripcion';
        echo '</button>';
        $url="../model/action/action_vainscripcion.php";
        }elseif ($estado ==5){
          echo'<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal2"> ';
          echo 'Solicitar Renovacion';
          echo'</button>';
        $url="../model/action/action_solrenovacion.php";
        
        }else{
          echo "<label class='pendiente'>Pendiente de Aprobacion</label>";
        }
        ?>

        
      </div>
    </div>  
  </div>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Renovacion</h4>
      </div>
      <div class="modal-body">
      <form method="post" action="<?=$url?>" enctype="multipart/form-data">
        
        <label>Imagen del Recibo:</label>
        <input type="file" name="imagen">
        <input type="hidden" name="idInsc" value="<?=$inscripcion?>">
        <input type="hidden" name="idRen" value="<?=$renovacion?>">
        <input type="hidden" name="usuario" value="<?=$usuario?>">
        <input type="hidden" name="idPer" value="<?=$idPer?>">
        <input type="hidden" name="miembro_nisMiem" value="<?=$nisMiem?>">
        <input type="hidden" name="idGrup" value="<?=$idGrup?>">
        <label>
          Banco:
        </label>
        <select id="estilo_select" name="banco_idBanc" class="form-control">
                                     <?php
                          
                          $banc = $banco->seleccionar_banco(); 
                          if($banc !=null){
                          foreach ($banc AS $key => $info) {
                           echo '<option value='.$info["idBanc"].'>'.$info["nomBanc"].'</option>';
                            } 
                          }else{
                           echo '<option value="">No se encontro..</option>';
                          }
                                    ?>
                                    
                                </select>
        <label>
          Numero de Factura:
        </label>  
        <input type="text" class="form-control" name="numFactRen">  
        <label>
          Monto:
        </label>  
        <input type="text" class="form-control" name="montoRen"> 
        <label>Fecha de Pago:</label>
        <input type="date" name="fchaPagRen" class="form-control"> 
      </div>
      <div class="modal-footer">
        <button value="Entrar" class="btn btn-primary">Entrar</button>
      </form>
      </div>
    </div>

  </div>
</div>
<!-- Button trigger modal -->


<!-- Modal este es el modal dos -->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Solicitar Renovacion</h4>
      </div>
      <form action="<?=$url?>" method="POST" >
        
      <div class="modal-body">
        <input type="hidden" name="usuario" value="<?=$usuario?>">
        <input type="hidden" name="idPer" value="<?=$idPer?>">
        <input type="hidden" name="miembro_nisMiem" value="<?=$nisMiem?>">
        <input type="hidden" name="idGrup" value="<?=$idGrup?>">
        <label>
          Fecha de Vencimiento: Marzo/<?=$year?>
        </label>
        <br>
        <label>
          NIS: <?=$nisMiem?>
        </label>
        <br>
        <label>
          Nombre: <?=$nomPer?> <?=$apelPer?>
        </label>
        <br>
        <label>Nombre de Grupo: <?=$nomGruo?>
        </label>
        <br>
        <label>Grupo: <?=$numGrup?>
        </label>
        <br>
        <label>
          <?php $date =date("y-m-d"); ?>
          Fecha de Solicitud: <?=$date?>
        </label>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary">Solicitar</button>
      </form>
      </div>
    </div>
  </div>
</div>  
</body>
</html>