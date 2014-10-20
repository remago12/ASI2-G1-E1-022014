<?php 
require_once '../../model/data/dataBase.php';
require_once '../../model/clases/cbanco.php';

$banco= new Banco();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Solicitud de Miembro</title>
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
    <div class="container">
      <div class="row">
          <div class="col-md-4">
            <h1>Listado de Bancos</h1>
            <select class="form-control">
              <option>
                Nuevo Banco
              </option>
              <option>
                Banco Davivienda
              </option>
            </select><br>
          <form action="../../model/clases/acBanco.php" method="POST">
              <label>
                Nombre:
              </label> 
              <input type="text" class="form-control" name="nomBanco">
              <label>
                Número de Cuenta:
              </label>
              <input type="text" class="form-control" name="numCuenta">
              <br>
              
              <button class="btn btn-success" >Guardar</button>
          </form>  
          </div>
          <div class="col-md-4">
            <table class="table table-hover">
              <thead>
            <tr>
              <th>Nombre de Banco</th>
              <th>Numero De Cuenta</th>
            </tr>
          </thead>
          <tbody>
              <tr>
              
              <td>
                Banco Davivienda
              </td>
              <td>
                00909878-8
              </td>
              
              
            </tr>            

          </tbody>
        </table>
            
          </div>        
      </div>
    </div>
</body> 
<html>