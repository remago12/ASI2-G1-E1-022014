<?php
    //Database
  require_once '/var/www/html/html/ASI2-G1-E1-022014/asi/model/clases/cCuadro_Clinico.php';
  require_once '/var/www/html/html/ASI2-G1-E1-022014/asi/model/data/dataBase.php';

  $cuadroC =new CuadroClinico();
  ?>
<!DOCTYPE html>
<html>
<head>
<title>
    Alergias
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
          <li><a href="../index.html">Inicio</a></li>
        <li><a href="solicitudes_inscripcion.html">Inscripciones</a></li>
        <li><a href="solicitudes_renovacion.html">Renovación</a></li>
        <li><a href="../grupos_scout.html">Grupos Scout</a></li>
        <li><a href="../miembros_scout.html">Miembros Scout</a></li>
          <img id="logo2" src="../../img/logo1.png" class="img-responsive" alt="Responsive image">
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  	</nav>
    <form method="POST" action="../../model/clases/action_alergia.php">
    <div class="container">
      <div class="row">          
            <h1 class="text-center">Listado de Alergias</h1>
            <hr class="line">
            <br><br>
            <div class="col-md-4">            
            <label>
              Nombre:
            </label> 
            <input type="text" class="form-control" name="nomAlergia">
            <br>
            <button class="btn btn-success" >Nuevo</button>
          </div>
          </form>
          <div class="col-md-4">
          <table class="table table-hover">
              <thead>
            <tr>
              <th>Nombre de Alergia</th>
            </tr>
          </thead>
          <tbody>
          <?php 
      try{
      $cuadro = $cuadroC->seleccionar_alergia();
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($cuadro!=null)
        {
        foreach($cuadro AS $key => $bl)
        {
        $nomAlergia      = $bl['nomAlerg'];
        $idAlergia       = $bl['idAlerg'];
        ?>
              <tr>
        <td>
        <?=$nomAlergia?>
        </td>
        <td>
          <a href="mod_alergia.php?id=<?=base64_encode($idAlergia)?>">Editar</a>
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