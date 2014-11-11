<!DOCTYPE html>
<html>
<head>

	<title>
		
	</title>
  <script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/confirm.js"> </script>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
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
        <li><a href="../views/miembrosGrupo.tpl.php">Miembros</a></li>
        <li><a href="../views/perfilGrupo.php">Grupo</a></li>
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
    <div class="row ">
        <div class="col-md-6 col-sm-12  col-xs-12">
          <div class="row">
            <div  class="col-md-11 col-sm-12 col-xs-12 borde box1 box">
              <a class="cos" href="">
                <div id="uno" class="row borde box">
                  <h2 class="encabezado">Solicitudes</h2>
                </div>
               </a>
               <a href="../views/solicitudesGrupo.php">Solicitudes</a>
            </div>
            <div  class="col-md-11 col-sm-12 col-xs-12 borde box1 box3">
              <a class="cos" href="">
              <div id="dos" class="row borde box3">
                  <h2 class="encabezado">Grupo</h2>
              </div>  
              </a>
              
              <br>
              <a href="../views/perfilGrupo.php">Grupo</a>
            </div>
          </div>  
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="row">
            <div  class="col-md-11 col-sm-12 col-xs-12 borde box2 box4">
              <a class="cos" href="">
              <div id="tres" class="row borde box4">
                <h2 class="encabezado">Miembros</h2>
              </div> 
              </a>
              <a href="../views/miembrosGrupo.tpl.php">Miembros de Grupo</a>
            </div>
            <div  class="col-md-11 col-sm-12 col-xs-12 borde box2 box5">
              <a class="cos" href="">
              <div id="cuatro" class="row borde box5">
                <h2 class="encabezado">Mantenimiento</h2>
              </div>
              </a>
              
              <br>
              <a href="../views/mantenimiento/padecimiento.tpl.php">Padecimiento</a>
              <br>
              <a href="../views/mantenimiento/alergias.tpl.php">Alergia</a>
              <br>
              
            </div>
          </div>
        </div>
    </div>
  </div>





</body>
</html>