<?php
    //Database
  require_once '../../model/clases/cCuadro_Clinico.php';
  require_once '../../model/data/dataBase.php';

  $cuadroC =new CuadroClinico();
  $idE = base64_decode($_GET['id']);
  ?>
  <?php 
      try{
      $cuadro = $cuadroC->seleccionar_padecimiento1($idE);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($cuadro!=null)
        {
        foreach($cuadro AS $key => $bl)
        {
    

        $nomPad      = $bl['nomPad'];
        $idPad       = $bl['idPad'];
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
	<title>Padecimientos</title>

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
    <form method="POST" action="../../model/clases/action_mod_pad.php">
    <div class="container">
      <div class="row">          
            <h1 class="text-center">Listado de Padecimientos</h1>
            <hr class="line">
            <br><br>
            <div class="col-md-4">            
            <label>
              Nombre:
            </label> 
            <input type="text" class="form-control" name="nomPad" value="<?=$nomPad?>">
            <input type="hidden" name="idPad" value="<?=$idPad?>">
            <br>
            <button class="btn btn-success" >Nuevo</button>
          </div>
          </form>
          <div class="col-md-4">
          <table class="table table-hover">
              <thead>
            <tr>
              <th>Nombre de Padecimiento</th>
            </tr>
          </thead>
          <tbody>
          <?php 
      try{
      $cuadro = $cuadroC->seleccionar_padecimiento();
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($cuadro!=null)
        {
        foreach($cuadro AS $key => $bl)
        {
        $nomPad      = $bl['nomPad'];
        $idPad       = $bl['idPad'];
        ?>
              <tr>
        <td>
        <?=$nomPad?>
        </td>
        <td>
          <a href="mod_Pad.php?id=<?=base64_encode($idPad)?>">Editar</a>
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