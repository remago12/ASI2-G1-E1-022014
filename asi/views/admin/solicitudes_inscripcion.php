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
        <li><a href="../index.html">Inicio</a></li>
        <li> <a href="#">Solicitudes</a> </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mantenimiento<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../mantenimiento/manBanco.tpl.php">Banco</a></li>
            <li><a href="../mantenimiento/alergias.tpl.php">Alergias</a></li>
            <li><a href="../mantenimiento/padecimiento.tpl.php">Padecimiento</a></li>
            <li class="divider"></li>
            <li><a href="../mantenimiento/estado.tpl.php">Estado</a></li>
          </ul>
        </li>
        <li><a href=""><img src="..."></a> </li>
        <li><a href="">Oscar Lizama</a></li>
      	<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cerrar Sesion<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Banco</a></li>
            <li><a href="#">Alergias</a></li>
            <li><a href="#">Padecimiento</a></li>
            <li class="divider"></li>
            <li><a href="#">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="container">
		<h2 class="text-center">Solicitudes de Inscripción</h2>
		<hr class="line">
		<div class="row">
			<div class="col-md-2 ">
        <label>Numero del Grupo:</label>
        <select class="form-control">
          <option>
            traer de la base Vee xD
          </option>  
        </select>
        
      </div>
      <div class="col-md-2 ">
        <label>Estado:</label>
          <select class="form-control">
            <option >
                traer de la base
            </option>
          </select>
      </div> 
		</div>
    <div class="row">
      <div class="col-md-2">
        <label>
          Departamento: 
        </label>
          <select class="form-control">
        <option >
          de la Base viene
            
        </option>   
          </select>
      </div>
      <div class="col-md-2">
        <label>
          Municipio: 
        </label>
          <select class="form-control">
        <option >
          de la Base viene
            
        </option>   
          </select>
      </div>
      <div class="col-md-2">
        <label>
          Tipo de Solicitud: 
        </label>
          <select class="form-control">
        <option >
          de la Base viene
            
        </option>   
          </select>
      </div>
    </div>
		<br>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-1">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Numero de solicitud</th>
							<th>Nombre</th>
							<th>Género</th>
							<th>Edad</th>
							<th>Numero de Grupo</th>
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
        $numGrup    =$bl['numGrup'];
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
        <?=$numGrup?>
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
