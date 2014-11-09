<!DOCTYPE html>
<html>
<head>
	<title>
		Miembros de Grupo
	</title>
	<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/confirm.js"> </script>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
  <script type="text/javascript" src="../js/script_combo.js"></script>
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
        <li><a href="../views/indexJefe.php">Inicio</a></li>
        <li><a href="../views/solicitudesGrupo.php">Solicitudes</a> </li>
        <li><a href="../views/miembrosGrupo.php">Miembros</a></li>
        <li><a href="">Grupo</a></li>
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
<div class="row">
			
      <div class="col-lg-8 col-lg-offset-1">
				<div class="row">

          <div class="col-lg-1">
            <label>NISS:</label>
            <input type="text" id="nis" class="form-control">
          </div>
         <div class="col-lg-3">
            <label> Departamento:</label>
            <select class="form-control" name="departamento" id="departamento">
              <option>
              Seleccione un departamento
              </option>      
            </select>

          </div>
          <div class="col-lg-3">
            <label>Municipio:</label>
            <select class="form-control" name="municipio" id="municipio">
              <option>
              Selecciona un municipio
              </option>      
            </select>
          </div>

          
          </div>
          <div class="row">
            <div class="col-lg-3">
            <label>Numero de Grupo:</label>
            <select class="form-control" name="grupo" id="grupo">
              <option>
                Seleccione un grupo
              </option>  
            </select>  

          </div>
          <div class="col-lg-2">
            <label>Genero:</label>
            <select class="form-control">
              <option>
                
              </option>  
            </select>

  
          </div>
          <div class="col-lg-1">
            <label>
              Edad:
            </label>
            <input  type="text" class="form-control">
          </div>
           <div class="col-lg-3">
            <label>Nombre:</label>
            <input type="text" class="form-control">    
          </div> 
          <div class="col-lg-3">
            <label>Apellido:</label>
            <input type="text" class="form-control">    
          </div>               
        </div>
        <table class="table table-striped">
					<thead>
						<tr>
							<th>NIS</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Género</th>
							<th>Edad</th>
							<th>Número de Grupo</th>
							<th>Ver Perfil</th>
						</tr>
					</thead>
					<tbody name="loop" id="loop">
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
        Pone el niss
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
        <td>
        <a href="">Redireccion al perfil</a>
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





</body>
</html>