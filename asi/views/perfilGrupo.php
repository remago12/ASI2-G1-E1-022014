<!DOCTYPE html>
<html>
<head>
	<title>Solicitud de Miembro</title>
  <script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
  <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed|Francois+One' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es"></script>
  <script type="text/javascript" src="../js/mapa.js"></script>
  <link type="text/css" href="../css/map.css" rel="stylesheet" media="all" />
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
        <li><a href="../views/admin/solicitudes_inscripcion.php">Solicitudes</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mantenimiento<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../views/mantenimiento/manBanco.tpl.php">Banco</a></li>
            <li><a href="../views/mantenimiento/alergias.tpl.php">Alergias</a></li>
            <li><a href="../views/mantenimiento/padecimiento.tpl.php">Padecimientos</a></li>
            <li class="divider"></li>
            <li><a href="../views/mantenimiento/estado.tpl.php">Estado</a></li>
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
      <h1 class="text-center">Perfil de Grupo</h1>
    </div>
    <hr class="line"><br>
    <div class="row">
      <div class="col-md-6">
        <h1 class="text-center">Datos del Grupo</h1>
        <br>
        <label>
          Nombre del Grupo:
        </label>
        <label> San Antonio</label>
        <br>
        <label>
          Fecha de Fundación:
        </label>
        <label>
          3/10/2014
        </label>
        <br>
        <label>
          Dia de Reunión:
        </label>

        <label>
          Sábado
        </label>
        <br>
        <label>
          Dirección:
        </label>
        <label>
          Br el Carmen Parque Municipal Mejicanos.
        </label>
      </div>
      <div class="col-md-6">
        <h1 class="text-center">Ubicación</h1>
        <br>
          <div id="map" >
        
          </div>
          <input type="hidden" name="txt_lat" id="txt_lat" class="form-control">
          <input type="hidden" name="txt_lng" id="txt_lng" class="form-control">

      </div>

    </div>
    <br><br>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Nombre Completo</th>
              <th>Edad</th>
              <th>Género</th>
              <th>Usuario</th>
              <th>Cargo</th>
              <th>Cargo Nacional</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                Jose Neftali Ramirez Mendoza
              </td>
              <td>
                14
              </td>
              <td>
                M
              </td>
              <td>
                RM000314
              </td>
              <td>
                Lobato
              </td>
              <td>
                ------
              </td>
            </tr>
            <tr>
              <td>
                Oscar Antonio Lizama Mejia
              </td>
              <td>
                27
              </td>
              <td>
                M
              </td>
              <td>
                LM000314
              </td>
              <td>
                Dirigente de Manada
              </td>
              <td>
                Comisionado Nacional
              </td>
            </tr> 
          </tbody>
        </table>
      </div>
    </div>
</div>

<br><br>

</body>
</hmtl>  