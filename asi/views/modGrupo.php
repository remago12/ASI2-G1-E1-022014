<?php
    //Database
	require_once '../model/clases/cGrupo.php';
	require_once '../model/data/dataBase.php';
     //Objetos
     $oGrupo   = new Grupo();
     $IdGrup = base64_decode($_GET['IdGrup']);

      try{
      $Grupo = $oGrupo->seleccionar_grupo($IdGrup);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($Grupo!=null)
        {
        foreach($Grupo AS $key => $bl)
        {
        $nomGrup      = $bl['nomGruo'];
        $numGrup       = $bl['numGrup'];
        $fchaFundGrup       = $bl['fchaFundGrup'];
        $exclGrup       = $bl['exclGrup'];
        $lugReuGrup       = $bl['lugReuGrup'];
        $proLugGrup       = $bl['proLugGrup'];
        $telgrup       = $bl['telgrup'];
        $nomDep       = $bl['nomDep'];
        $nomMunic       = $bl['nomMunic'];
        $callGrup       = $bl['callGrup'];
        $numCasGrup       = $bl['numCasGrup'];
        $colGrup       = $bl['colGrup'];
        $latGrup       = $bl['latGrup'];
        $lngGrup       = $bl['lngGrup'];
         
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
		<title>
			Modificación de Grupo
		</title>

		<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	  	<link rel="stylesheet" type="text/css" href="../css/custom.css">
	  	<link type="text/css" href="../css/map.css" rel="stylesheet" media="all" />
	  	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es"></script>
  		<script type="text/javascript" src="../js/mapa.js"></script>
  		<meta charset="UTF-8">
	</head>
	<body onload="initialize()">
		
	<nav class="navbar navbar-default" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <img id="logo1" src="../img/ases1.jpg" class="img-responsive" alt="Responsive image">
	      <a  class="navbar-brand" href="#"><h3>SCOUT</h3>El Salvador</a> 
	      
	    </div>
	      
	      <br>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="indexadmin.html">Inicio</a></li>
	        <li><a href="solicitudes_inscripcion.html">Inscripciones</a></li>
        <li><a href="solicitudes_renovacion.html">Renovación</a></li>
        <li><a href="miembros_scout.html">Miembros Scout</a></li>
	        <img id="logo2" src="../img/logo1.png" class="img-responsive" alt="Responsive image">

	      </ul>

	    </div><!-- /.navbar-collapse -->

	  </div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<form method="POST">
			
		<div class="row">
			<h2 class="text-center">Modificación de Grupo</h2>
			<hr class="line"><br>
			<div class="col-lg-3">
				<label>Nombre de Grupo:</label>
				<input type="text" name="nomGrupo" class="form-control" value="<?=$nomGrup?>"><br>
				<label>Número de Grupo:</label>
				<input type="text" name="numGrupo" class="form-control" value="<?=$numGrup?>"><br>
				<label>Fecha de Fundación:</label>
				<input type="date" name="fechFundacion" class="form-control" value="<?=$fchaFundGrup?>"><br>
				<label>Exclusivo:</label>
				<br>
				<label>
				Si	
				<input type="radio" name="exclusivo" <?php echo ($exclGrup=='S')?'checked':''?> >	
				</label>&nbsp;&nbsp;&nbsp;
				<label>No</label>
				<input type="radio"  name="exclusivo" <?php echo ($exclGrup=='N')?'checked':''?> ><br><br>
				<label>Lugar de Reunión:</label>
				<input type="text" name="lugarReunion" class="form-control" value="<?=$lugReuGrup?>"><br>	
				<label>Propietario del Lugar:</label>
				<input type="text" name="propLugar" class="form-control" value="<?=$proLugGrup?>"><br>	
				<label>Teléfono:</label>
				<input type="text" name="telefono" class="form-control" value="<?=$telgrup?>">	
			</div>	
			<div class="col-lg-4"> 
				<label>Departamento:</label>
					<select class="form-control">
						<option><?=$nomDep?></option>
					</select>
				<br>
				<label>Municipio:</label>
				<select class="form-control">
					<option>
						<?=$nomMunic?>
					</option>
						
				</select>
				<br>	
				<label>Calle:</label>
				<input type="text" name="calle" class="form-control" value="<?=$callGrup?>">
				<br>	
				<label>Número de Casa:</label>
				<input type="text" name="numCasa" class="form-control" value="<?=$numCasGrup?>">
				<br>
				<label>Colonia:</label>
				<input type="text" name="colonia" class="form-control" value="<?=$colGrup?>">
				<br>
				
				<br>
			</div>
			<div class="col-lg-4">
					<div id="map" >
				
					</div>
					<input type="hidden" name="txt_lat" id="txt_lat" class="form-control" value="<?=$latGrup?>">
					<input type="hidden" name="txt_lng" id="txt_lng" class="form-control" value="<?=$lngGrup?>">
					<br>
					<a href="grupos_scout.html" class="btn btn-primary btn-lg" role="button">Cancelar</a>
					<a href="grupos_scout.html" class="btn btn-primary btn-lg" role="button">Guardar</a>
					<br>
					<br>
			</div>
		</div>
		
			


		</form>

	</div>
<br><br>
	</body>
	</html>