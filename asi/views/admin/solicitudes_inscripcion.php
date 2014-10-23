<?php
    //Database
	require_once '../../model/clases/cInscripcion.php';
	require_once '../../model/data/dataBase.php';
     //Objetos
     $oInscripcion   = new Inscripcion();
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
	<div class="container">
		<h2 class="text-center">Solicitudes de Inscripción</h2>
		<hr class="line">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-9">
				<input type="text" placeholder="Buscar" class="form-control">
			</div>
			
		</div>
		<br>
		<div class="row">
			<div class="col-lg-7 col-lg-offset-1">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Numero de solicitud</th>
							<th>Nombre</th>
							<th>Género</th>
							<th>Edad</th>
							<th>DUI</th>
						</tr>
					</thead>
					<tbody>
					  <?php 
      try{
      $cuadro = $oInscripcion->seleccionar_inscripciones();
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($cuadro!=null)
        {
        foreach($cuadro AS $key => $bl)
        {
        $numSolicInsc      = $bl['numSolicInsc'];
        $nomPer       = $bl['nomPer'];
        $apelPer       = $bl['apelPer'];
        $genPer ="";
        if ($bl['genPer'] == "M"){
        	$genPer= "Masculino";
        }else{
        	$genPer= "Femenino";
        }
        $fechNacPer =$bl['fechNacPer'];
        $fecha = time() - strtotime($fechNacPer);
$edad = floor((($fecha / 3600) / 24) / 360);

        
        ?>
              <tr>
        <td>
        <?=$numSolicInsc?>
        </td>
        <td>
        <?=$nomPer." ".$apelPer?>
        </td>
        <td>
        <?=$genPer?>
        </td>
        <td>
        <?=$edad?>
        </td>
        <td>
         <a href="solicitud_miembro.tpl.php?numSolicInsc=<?=base64_encode($numSolicInsc)?>">Editar</a>
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
</html>
