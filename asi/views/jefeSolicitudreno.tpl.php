<?php
    //Database
  require_once '../model/data/dataBase.php';
  require_once '../model/clases/cUsuario.php';
  require_once '../model/clases/cPerfil.php';
 
  session_start();
    // Objetos
     $oUsuario   = new Usuario();
     $perfil     = new Perfil();
    // revisando sesiones 
    
    if ( $oUsuario->verSession() == true ) {
    if (isset($_SESSION['rol'])) {
        $rol = $_SESSION['rol'];
           if ($rol == "2") {   
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
      $grupos = $perfil->seleccionar_grup($usuario);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($grupos!=null)
        {
        foreach($grupos AS $key => $bl)
        {
        $idgruop      = $bl['grupo_idGrup'];
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
		Solicitudes de Renovación
	</title>

	<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="../css/custom.css">
  	<script type="text/javascript" src="../js/script_combo.js"></script>
  	 	<script type="text/javascript" src="../js/jefe_renovaciones.js"></script>
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
        <li><a href="solicitudes_renovacion.html">Renovación</a></li>
        <li><a href="../grupos_scout.html">Grupos Scout</a></li>
        <li><a href="../miembros_scout.html">Miembros Scout</a></li>
        <img id="logo2" src="../../img/logo1.png" class="img-responsive" alt="Responsive image">
      </ul>

    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
	</nav>
	<div class="container">
		<h2 class="text-center">Solicitudes de Renovación</h2>
		<hr class="line">
		<div class="row">
			<div class="col-md-2">
				<label>
					Numero de Grupo:
				</label>
<<<<<<< HEAD
				<h1><?=$idgruop?></h1>
				<input type="hidden" name="grupo2" id="grupo2" value="<?=$idgruop?>">
=======
				<h1></h1>
				<input type="hidden" name="grupo" id="grupo">
>>>>>>> 0f254ce9323dffba2d098726fc3f1b706c20f874
			</div>
			<div class="col-md-3">
				<label>
					Estado
				</label>
				<select class="form-control" id="estado" name="estado">
					<option>
						Seleccione un estado
					</option>
				</select>
			</div>
			<div class="col-md-2">
				<label>
					Departamento
				</label>
				<select class="form-control" name="departamento" id="departamento">
					<option>
						Seleccione un departamento
					</option>
				</select>
			</div>
			<div class="col-md-2">
				<label>
					Municipio
				</label>
				<select class="form-control" name="municipio" id="municipio">
					<option>
						Seleccione un municipio
					</option>
				</select>
			</div>		
		</div><br>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>N°Solicitud</th>
							<th>NIS</th>
							<th>Nombre</th>
							<th>Genero</th>
							<th>Edad</th>
							<th>Departamento</th>
							<th>Municipio</th>
							<th>N°Grupo</th>
						</tr>
					</thead>
					<tbody name="loop" id="loop">

					</tbody>
				</table>
				<ul class="paginacion text-center" >
          </ul>
			</div>				
		</div>

		</div>
	</div>
</body>
</html>