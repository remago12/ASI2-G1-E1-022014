<?php
 require_once '../data/dataBase.php';
 require_once 'clases/cRegistro.php';

$registro   = new Registro();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Grupos Scout</title>

	<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img id="logo1" src="../img/ases1.jpg" class="img-responsive" alt="Responsive image">
      <a  class="navbar-brand" href="#"><h3>SCOUT</h3>El Salvador</a> 
      
    </div>
      
      <br>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="indexadmin.html">Inicio</a></li>
        <li><a href="solicitudes_de_inscripcion.html">Inscripciones</a></li>
        <li><a href="solicitudes_de_renovacion.html">Renovacion</a></li>
        <li><a href="grupos_scout.html">Grupos Scout</a></li>
        <li><a href="miembros_scout.html">Miembros Scout</a></li>
        <img id="logo2" src="../img/logo1.png" class="img-responsive" alt="Responsive image">

      </ul>

    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
</nav>
	<div class="container">
		<h2 class="text-center">Grupos Scout</h2>		
		<div class="row">
			<div class="col-lg-4">
				<a href="inscripcion_de_grupo.html" class="btn btn-primary btn-lg" role="button">Agregar un Nuevo Grupo</a>
			</div>
			<div class="col-lg-4 col-lg-offset-4">
				<input type="text" class="form-control" placeholder="Busqueda">
			</div>
		</div>
               
        </div>
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Nombre de Grupo</th>
							<th>Numero</th>
                            <th>Departamento</th>
                            <th>Municipio</th>
							<th>Lugar de Reunion</th>
							<th>Dia de Reunion</th>
							<th>Hora</th>
							
						</tr>
					</thead>
                    <tbody>
                     <?php 
      try{
      $blogp = $registro->seleccionar_grupos();
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($blogp!=null)
        {
        foreach($blogp AS $key => $bl)
        {
        $numGrup     = $bl['numGrup'];
        $nomGruo   = $bl['nomGruo'];
		$nomDep =$bl['nomDep'];
		$nomMunic =$bl['nomMunic'];
        $lugReuGrup = $bl['lugReuGrup'];
		$diaReuGrup =$bl['diaReuGrup'];
		$horaReuGrup =$bl['horaReuGrup'];
		/*echo "<tr>";
		echo "<td>";
		echo $nomGruo;
		echo "</td>";
		echo "<td>";
		echo $numGrup;
		echo "</td>";
		echo "<td>";
		echo $lugReuGrup;
		echo "</td>";
		echo "</tr>";
		*/
        ?>
        <tr>
        <td>
        <?=$nomGruo?>
        </td>
        <td>
         <?=$numGrup?>
        </td>
        <td>
        <?=$nomDep?>
        </td>
        <td>
        <?=$nomMunic?>
        </td>
        <td>
        <?=$lugReuGrup?>
        </td>
        <td>
         <?=$diaReuGrup?>
        </td>
         <td>
        <?=$horaReuGrup?>
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