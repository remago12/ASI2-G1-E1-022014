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
		<h1 class="text-center">Solicitud de Miembro</h1>
		<form method="POST" action="../../model/clases/action_crear_miembro.php?idI=<?=base64_encode($idI)?>">
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
				<select id="estado" name="estado">
					<option value="<?=$idEst?>"> <?=$nomEst?> </option>
				</select>
			</div>
			
		</div>	

		</div>
		</form>
		<br/><br/><br/><br/>
</body>
</html>