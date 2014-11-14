<?php
    //Database
	require_once '../../model/clases/cInscripcion.php';
	require_once '../../model/data/dataBase.php';
     //Objetos
     $oInscripcion   = new Inscripcion();
     $idI = base64_decode($_GET['numSolicInsc']);

      try{
      $inscripcion = $oInscripcion->seleccionar_inscripcion($idI);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($inscripcion!=null)
        {
        foreach($inscripcion AS $key => $bl)
        {
    

        $nomPer     = $bl['nomPer'];
        $apelPer    = $bl['apelPer'];
        $genPer     = $bl['genPer'];
          if ($bl['genPer'] == "M"){
        	$genPer= "Masculino";
        }else{
        	$genPer= "Femenino";
        }
        $fechNacPer =$bl['fechNacPer'];
        $fecha 		= time() - strtotime($fechNacPer);
		$edadPer 	= floor((($fecha / 3600) / 24) / 360);
		$numGrup 	=$bl['numGrup'];
		$idEst 		=$bl['idEst'];
		$nomEst 	=$bl['nomEst'];
		$corrPer 	=$bl['corrPer'];
        ?>
        <?php
        
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
  	<script type="text/javascript" src="../../js/inscripcion.js"></script>
  	  	 <script type="text/javascript" src="../../js/auto-gen.js"></script>
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
        <li><a href="../../controller/indexAdmin.tpl.php">Inicio</a></li>
        <li><a href="../../views/admin/solicitudes_inscripcion.php">Solicitudes</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mantenimiento<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="manBanco.tpl.php">Banco</a></li>
            <li><a href="alergias.tpl.php">Alergias</a></li>
            <li><a href="padecimiento.tpl.php">Padecimientos</a></li>
            <li class="divider"></li>
            <li><a href="../views/mantenimiento/estado.tpl.php">Estado</a></li>
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

		<h1 class="text-center">Solicitud de Miembro</h1>
		<form method="POST" action="../../model/action/action_crear_miembro.php?idI=<?=base64_encode($idI)?>">
		<div class="container">

		<div class="row">
			
			<div class="col-lg-2"><br/><br/>
			<img src="../../img/perfil.jpg">
			</div>
			<hr class="line">
			<div class="col-lg-4">
				<div id="nisp" nombre="nisp">
				<input type="text" name="idI" id="idI" value="<?=$idI?>" class="validate[required] medium form-control"><br>
            <input type="text" name="NIS" id="NIS" placeholder="" class="validate[required] medium form-control"><br>
			<input type="text" name="nombre" id="nombre" value="<?=$nomPer?>">
            <input type="text" name="apellido" id="apellido" value="<?=$apelPer?>">
            <input type="text" name="correo" id="correo" value="<?=$corrPer?>">
			</div>
			<label>Numero de Solicitud: <?=$idI?></label> <br>
			<label>Nombre: <?=$nomPer?> </label> <br>
	<label>Apellido: <?=$apelPer?> </label> <br>
	<label>Genero: <?=$genPer?> </label> <br>
	<label>Fecha de Nacimiento: <?=$fechNacPer?> </label> <br>
	<label>Edad: <?=$edadPer?> </label> <br>
				<div name="DUI" id="DUI">
				</div>
				<div name="fecna" id="fecna">
				</div>
				<div name="telcel" id="telcel">
				</div>
				<div name="telcasa" id="telcasa">
				</div>
				<div name="genero" id="genero">
				</div>
			<div name="direccion" id="direccion">
				</div>
				</div>
			<div class="col-lg-4">
			<label>Numero de Grupo: <?=$numGrup?> </label> <br>
			</div><br>
			<div class="col-lg-4">
				<label>Comprobante de Pago:</label>
				<br>
				<img src="../../img/Davivienda.jpg" class="img-responsive bancoimg">
				<br>
			<button class="btn btn-success">Guardar</button>	
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-4">
				<label>Exento de pago:</label>
				<input type="checkbox" >
				<br>
				<label>Comentario:</label>
				<br>
				<textarea>
					
				</textarea>
				<br>
				<label>
				Estado de la Solicitud:
				</label>
				<br>
				<select id="estado_inscripcion" name="estado_inscripcion">
					<option value="<?=$idEst?>"> <?=$nomEst?> </option>
				</select>
			</div>
			
		</div>	

		</div>
		</form>
		<br/><br/><br/><br/>
</body>
</html>