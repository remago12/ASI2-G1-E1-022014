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
  <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed|Francois+One' rel='stylesheet' type='text/css'>
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
        <li><a href="../../views/index.html">Inicio</a></li>
        <li><a href="../../views/admin/solicitudes_inscripcion.php">Solicitudes</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mantenimiento<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../mantenimiento/manBanco.tpl.php">Banco</a></li>
            <li><a href="../mantenimiento/alergias.tpl.php">Alergias</a></li>
            <li><a href="../mantenimiento/padecimiento.tpl.php">Padecimientos</a></li>
            <li class="divider"></li>
            <li><a href="../mantenimiento/estado.tpl.php">Estado</a></li>
          </ul>
        </li>
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