<!DOCTYPE html>

<html lang="es">
<head>

	<title>
		
	</title>
  <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link type="text/css" href="css/mapLog.css" rel="stylesheet" media="all" />
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=es"></script>
  <script type="text/javascript" src="js/mapLog.js"></script>
</head>
<meta charset="UTF-8">
<body>

  <nav class="navbar navbar-default log" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <img id="logo1" src="img/ases1.jpg" class="img-responsive" alt="Responsive image">
        <a  class="navbar-brand" href="#"><h3>SCOUT</h3>El Salvador</a>       
      </div>
      
      <br>
      <ul class="nav navbar-nav navbar-right">   
        <!--
        <li><a href="index.html">Inicio</a></li>
        <li><a href="solicitudes_de_inscripcion.html">Inscripciones</a></li>
        <li><a href="solicitudes_renovacion.html">Renovacion</a></li>
        <li><a href="grupos_scout.html">Grupos Scout</a></li>-->
        <li class="nohov"><a href="inscripcion_m.html"> <button class="btn btn-default">Registrate</button></a></li>
        <li class="nohov"> <a href="" data-toggle="modal" data-target="#myModal"><button class="btn btn-default">Ingresar</button></a></li>
        <img id="logo2" src="img/logo1.png" class="img-responsive" alt="Responsive image">
      </ul>

      </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
  </nav>
        
  <class class="container log1">
    <div class="row">
      <div class="col-md-12">
        <div id="map" >
        </div>
        <input type="hidden" name="c_x" class="form-control" id="txt_lat" placeholder="Coordenadas en x">
        <input type="hidden" name="c_y" class="form-control" id="txt_lng" placeholder="Coordenadas en y">    
      </div>
    </div>
            <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Ingresa</h4>
          </div>
          <div class="modal-body">
            <div class="row">    
              <form method="POST" name="formLogin"  id="formLogin" class="form-horizontal" role="form">
                <label>
                  Usuario:
                </label>
                <input type="text" placeholder="Usuario" name="username_id" id="username_id" class="form-control"  >
                <label>
                  Contraseña:
                </label>
                <input type="password" placeholder="contraseña" name="password" id="password" class="form-control" >

                <div class="modal-footer">

                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                  <button type="button" value="Entrar" class="btn btn-primary">Entrar</button>

                  <a href="inscripcion_m.html">Registrate</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
