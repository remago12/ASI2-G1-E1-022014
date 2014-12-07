<?php
    //Database
  require_once '../model/data/dataBase.php';
  require_once '../model/clases/cUsuario.php';
  require_once '../model/clases/cPerfil.php';
  require_once '../model/clases/cExpediente.php';
  require_once '../model/clases/cCuadro_Clinico.php';
 
  session_start();
    // Objetos
     $oUsuario   = new Usuario();
     $perfil     = new Perfil();
     $expe       = new Expedientes();
     $cuadroC    = new CuadroClinico();
     $url= "";
     $year= date("y");
    // revisando sesiones 
    
    if ( $oUsuario->verSession() == true ) {
    if (isset($_SESSION['rol'])) {
        $rol = $_SESSION['rol'];
           if ($rol == "1") {   
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

  $NisPerfil = base64_decode($_GET['id']);

      try{
      $cuadro = $perfil->seleccionar_datos($NisPerfil);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($cuadro!=null)
        {
        foreach($cuadro AS $key => $bl)
        {
        $idPer       = $bl['idPersona'];  
        $nomPer      = $bl['nomPer'];
        $apelPer     = $bl['apelPer'];
        $genPer      = $bl['genPer'];
        $fechNacPer  = $bl['fechNacPer'];
        $telPer      = $bl['telPer'];
        $celPer      = $bl['celPer'];
        $corrPer     = $bl['corrPer'];
        $fotPer      = $bl['fotPer'];
        $callPer     = $bl['callPer'];
        $numCasPer   = $bl['numCasPer'];
        $colPer      = $bl['colPer'];
        $municipio_idMunic      = $bl['municipio_idMunic'];
        $nomMunic    = $bl['nomMunic'];
        $nomDep      = $bl['nomDep'];
        $nisMiem     = $bl['nisMiem'];
        $polizaSegMiem      = $bl['polizaSegMiem'];
        $certMiem    = $bl['certMiem'];
        $fotPer      = $bl['fotPer'];
        $estadop     = $bl['estado_idEst'];
        
        ?>
        <tr>
        </tr>
        <?php
        
        }
        }else{
         echo "No hay datos";
        }

       try{
      $grup = $perfil->seleccionar_grupop($NisPerfil);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($grup!=null)
        {
        foreach($grup AS $key => $bl)
        {
        $idGrup      = $bl['idGrup'];
        $nomMunic1    = $bl['nomMunic'];
        $nomDep1      = $bl['nomDep'];
        $numGrup     = $bl['numGrup'];
        $nomGruo     = $bl['nomGruo'];
        $lugReuGrup  = $bl['lugReuGrup'];
        $diaReuGrup  = $bl['diaReuGrup'];
        $horaReuGrup = $bl['horaReuGrup'];
        $callGrup    = $bl['callGrup'];
        $numCasGrup  = $bl['numCasGrup'];
        $colGrup     = $bl['colGrup'];
        $telgrup     = $bl['telgrup'];
        ?>
        <tr>
        </tr>
        <?php
        
        }
        }else{
         echo "No hay datos";
        }

        try{
      $estado = $perfil->seleccionar_estado($NisPerfil);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($estado!=null)
        {
        foreach($estado AS $key => $bl)
        {
        $estado      = $bl['estado_idEst'];
        $nomEst      = $bl['nomEst'];
        ?>
        <tr>
        </tr>
        <?php
        
        }
        }else{
         echo "No hay datos";
        } 
        try{
      $estad = $perfil->seleccionar_estadoI($NisPerfil);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($estad!=null)
        {
        foreach($estad AS $key => $bl)
        {
        $estadoI      = $bl['estado_idEst'];
        ?>
        <tr>
        </tr>
        <?php
        
        }
        }else{
         echo "No hay datos";
        }

        try{
      $esta = $perfil->seleccionar_estadoR($NisPerfil);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($esta!=null)
        {
        foreach($esta AS $key => $bl)
        {
        $estadoR      = $bl['estado_idEst'];
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
	Inicio
	</title>
  <script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery-ui.js"></script>
  <script type="text/javascript" src="../js/indexefe.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
  <link href='http://fonts.googleapis.com/css?family=Jura:400,500' rel='stylesheet' type='text/css'>
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
        <li><a href="#">Inicio</a></li>
        <li><a href="../controller/miembrosGrupo.php">Miembros</a> </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Solicitudes<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li> <a href="../controller/admin/solicitudes_inscripcion.php">Solicitudes</a></li>
            <li><a href="../controller/admin/solicitudes_renovacion.php">Renovacion</a></li>
            </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mantenimiento<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../controller/mantenimiento/manBanco.php">Banco</a></li>
            <li><a href="../controller/mantenimiento/alergias.php">Alergias</a></li>
            <li><a href="../controller/mantenimiento/padecimiento.php">Padecimientos</a></li>
            <li class="divider"></li>
            <li><a href="../controller/mantenimiento/estado.php">Estado</a></li>
          </ul>
        </li>
        <li><a href=""><img src="..."></a> </li>
        <li><a href=""><?=$usuario?></a></li>
        <li><a href="exit.php">Cerrar Sesion</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  







	<h1 class="text-center">Expediente</h1>
	<div class="container">
	<hr class="line"><br>
		<div class="row">
			<div class="col-lg-6">
				<label>Nombre:</label>
				<tr><td><?=$nomPer?></td></tr>
				<br>
				<label>Apellido:</label>
				<tr><td><?=$apelPer?></td></tr>
				<br>
				<label>
          		Genero:
        		</label>
        		<br>
          		<tr><td><?=$genPer?></td></tr>       
        		<br>
				<label>
          		Correo:
        		</label>
        		<br>
          		<tr><td><?=$corrPer?></td></tr>      
        		<br>
        		<label>
          		Departamento:
        		</label>
        		<br>
          		<tr><td><?=$nomDep?></td></tr>      
        		<br>
        		<label>
        	 	Municipio:
        		</label>
        		<br>
          		<tr><td><?=$nomMunic?></td></tr>      
				<br>
				<label>Dirección:</label>
				<br>
          		<tr><td>colonia</td></tr>
          		<tr><td><?=$colPer?></td></tr> 
          		<tr><td>calle</td></tr>
          		<tr><td><?=$callPer?></td></tr>
          		<tr><td>casa #</td></tr> 
          		<tr><td><?=$numCasPer?></td></tr>       
        		<br>
				<label>Fecha de Nacimiento:</label>
				<tr><td><?=$fechNacPer?></td></tr>
				<br>
				<label>Teléfono Celular:</label>
				<tr><td><?=$celPer?></td></tr>
				<br>
				<label>Teléfono Casa:</label>
				<tr><td><?=$telPer?></td></tr>
				<br>
				<label>Estado:</label>
				<tr><td><?=$nomEst?></td></tr>
				<br>
				
			</div>
			<div class="col-lg-6">
				<label>
          Nombre del Grupo:
        </label>
        <br>
          <tr><td><?=$nomGruo?></td></tr>      
        <br>
				<label>Grupo:</label>
				<tr><td><?=$numGrup?></td></tr>
				<br>
				<label>NIS:</label>
				<tr><td><?=$nisMiem?></td></tr>
				<br>
				<label>Seguro de Vida:</label>
				<tr><td><?=$polizaSegMiem?></td></tr>
				<br>
				<label>Cargo de Grupo:</label>
				Rover
				<br>
				<label>
          		Lugar de Reunion:
        		</label>
        		<br>
          		<tr><td><?=$lugReuGrup?></td></tr>      
        		<br>
        		<label>
          		Dia de Reunion:
        		</label>
        		<br>
          		<tr><td><?=$diaReuGrup?></td></tr>      
        		<br>
        		<label>
          		Hora de la Reunion:
        		</label>
        		<br>
          		<tr><td><?=$horaReuGrup?></td></tr>      
        		<br>
				
			</div>

		</div>
		<br>
		<div class="row">
			<h3 class=" text-center">Cuadro Clínico</h3>
			<hr class="line">
				<div class="col-lg-3">
					<br>
					<label>Alergias:</label>
					<table class="table">
					<tr>
					  <td>Penicilina</td>
					</tr>
					<tr>
					  <td>Mariscos</td>
					</tr>	
					</table>
				</div>
				<div class="col-lg-3">
					<br>
					<label>Padecimientos:</label>
					<table class="table">
					<tr>
						<td>Diabetes</td>
					</tr>
						
					</table>
				</div>
				<div class="col-lg-3">
					<br>
					<label>Discapacidad:</label>
					<table class="table">
						<tr>
							<td>TTTT</td>
						</tr>
						<tr>
					  		<td>HHH</td>
						</tr>
					</table>
				</div>
				<div class="col-lg-3">
					<br>
					<label>Tipo de Sangre:</label>
					<label>ORH+</label>
				</div>
			</div>
		
		<div class="row">
			<div class="col-lg-12">
				<h3 class="text-center">Cargos de Grupo</h2>
				<hr class="line">
					<table class="table table-striped">
						<thead>
							<tr>
								<td>Cargo de Grupo</td>
								<td>Fecha de Asignación</td>
								<td>Asignado por</td>
							</tr>
						</thead>
						<tbody>
							<?php 
      try{
      $cuadro = $expe->seleccionar_cargoeg($NisPerfil);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($cuadro!=null)
        {
        foreach($cuadro AS $key => $bl)
        {
        $nomCargoen      = $bl['nomCargo'];
        $fechacreacn      = $bl['fechaCrea'];
        $usucreacn      = $bl['usuCrea'];
        ?>
              <tr>
                <td><?=$nomCargoen?></td>
                <td><?=$fechacreacn?></td>
                <td><?=$usucreacn?></td>
              </tr> 
        <?php
        
        }
        }else{
         echo "No posee cargos en el grupo";
        }
        ?> 	
						</tbody>
					</table>
					<!-- Large modal -->
  <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal">Nuevo Cargo</button>
  <!-- Modal este es el modal uno -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Cargo Grupo</h4>
      </div>
      <form action="../model/action/action_cargoc.php" method="POST" >
        
      <div class="modal-body">
        
        <input type="hidden" name="miembro_nisMiem" id="miembro_nisMiem" value="<?=$nisMiem?>">
        <input type="hidden" name="usuario" id="usuario" value="<?=$usuario?>">
        <label>
          Cargo:
        </label>
        <select id="estilo_select" name="id_cargoc" class="form-control">
                                     <?php
                          
                          $cgrup = $perfil->seleccionar_cargoc(G); 
                          if($cgrup !=null){
                          foreach ($cgrup AS $key => $info) {
                           echo '<option value='.$info["idCargo"].'>'.$info["nomCargo"].'</option>';
                            } 
                          }else{
                           echo '<option value="">No se encontro..</option>';
                          }
                                    ?>
                                    
                                </select>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary">Ingresar</button>
      </form>
      </div>
    </div>
  </div>
  <!-- Modal end -->
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
			<h2 class="text-center">Cargos Nacionales</h2>
			<hr class="line">
				<table class="table table-striped">
					<thead>
              <tr>
                <td>Cargo de Grupo</td>
                <td>Fecha de Asignación</td>
                <td>Asignado por</td>
              </tr>
            </thead>
            <tbody>
            <?php 
      try{
      $cuadro = $expe->seleccionar_cargoen($NisPerfil);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($cuadro!=null)
        {
        foreach($cuadro AS $key => $bl)
        {
        $nomCargoen      = $bl['nomCargo'];
        $fechacreacn      = $bl['fechaCrea'];
        $usucreacn      = $bl['usuCrea'];
        ?>
              <tr>
                <td><?=$nomCargoen?></td>
                <td><?=$fechacreacn?></td>
                <td><?=$usucreacn?></td>
              </tr> 
        <?php
        
        }
        }else{
         echo "No posee cargos Nacionales";
        }
        ?> 
            </tbody>
				</table>
        <!-- Large modal -->
  <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal1">Nuevo Cargo</button>
  <!-- Modal este es el modal dos -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Cargo Grupo</h4>
      </div>
      <form action="../model/action/action_cargoc.php" method="POST" >
        
      <div class="modal-body">
        
        <input type="hidden" name="miembro_nisMiem" id="miembro_nisMiem" value="<?=$nisMiem?>">
         <input type="hidden" name="usuario" id="usuario" value="<?=$usuario?>">
        <label>
          Cargo:
        </label>
        <select id="estilo_select" name="id_cargoc" class="form-control">
                                     <?php
                          
                          $cgrup = $perfil->seleccionar_cargon(N); 
                          if($cgrup !=null){
                          foreach ($cgrup AS $key => $info) {
                           echo '<option value='.$info["idCargo"].'>'.$info["nomCargo"].'</option>';
                            } 
                          }else{
                           echo '<option value="">No se encontro..</option>';
                          }
                                    ?>
                                    
                                </select>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary">Ingresar</button>
      </form>
      </div>
    </div>
  </div>
  <!-- Modal end -->
			</div>
		</div>	
		<div class="row">
			<h2 class="text-center">Nivel de Progresión</h2>
			<hr class="line">
			<div class="col-lg-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<td>Tipo de Progresión</td>
						<td>Grado</td>
						<td>Fecha</td>
						<td>Comentarios</td>
						<td>Asignado por</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							Rover
						</td>
						<td>
							Promesado
						</td>
						<td>
							5/4/14
						</td>
						<td>
							A realizado un  buen trabajo  en los  ultimos  meses
						</td>
						<td>
							Isabel Margarita Perez Martinez
						</td>
					</tr>
				</tbody>
				
			</table>
      <!-- Large modal -->
  <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal2">Nivel de progresion</button>
  <!-- Modal este es el modal tres -->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Progresion</h4>
      </div>
      <form action="../model/action/action_parentesco.php" method="POST" >
        
      <div class="modal-body">
        
        <input type="hidden" name="miembro_nisMiem" id="miembro_nisMiem" value="<?=$nisMiem?>">
        <label>
          Cargo:
        </label>
        <select id="estilo_select" name="id_par" class="form-control">
                                     <?php
                          
                          $cgrup = $perfil->seleccionar_cargoc(G); 
                          if($cgrup !=null){
                          foreach ($cgrup AS $key => $info) {
                           echo '<option value='.$info["idCargo"].'>'.$info["nomCargo"].'</option>';
                            } 
                          }else{
                           echo '<option value="">No se encontro..</option>';
                          }
                                    ?>
                                    
                                </select>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary">Ingresar</button>
      </form>
      </div>
    </div>
  </div>
  <!-- Modal end -->
				
			</div>
		</div>
		<div class="row">
			<h2 class="text-center">Logros</h2>
			<hr class="line">
			<div class="col-lg-12">
				<table class="table table-striped">
					<thead>
						<tr>
							<td>Tipo de Progresión</td>
							<td>Grado</td>
							<td>Fecha</td>
							<td>Logro</td>
							<td>Asignado  por</td>
						</tr>
					</thead>
					<tbody>
						<tr>
						<td>Rover</td>
						<td>Promesado</td>
						<td>3/6/14</td>	
						<td>8 nudos básicos</td>
						<td>Isabel Menjivar</td>
						</tr>
					</tbody>
				</table>
        <!-- Large modal -->
  <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal3">Nuevo Logro</button>
  <!-- Modal este es el modal cuatro -->
<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Logros</h4>
      </div>
      <form action="../model/action/action_parentesco.php" method="POST" >
        
      <div class="modal-body">
        
        <input type="hidden" name="miembro_nisMiem" id="miembro_nisMiem" value="<?=$nisMiem?>">
        <label>
          Cargo:
        </label>
        <select id="estilo_select" name="id_par" class="form-control">
                                     <?php
                          
                          $logroe = $expe->seleccionar_logro(); 
                          if($logroe !=null){
                          foreach ($logroe AS $key => $info) {
                           echo '<option value='.$info["idLogro"].'>'.$info["nomLogro"].'</option>';
                            } 
                          }else{
                           echo '<option value="">No se encontro..</option>';
                          }
                                    ?>
                                    
                                </select>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary">Ingresar</button>
      </form>
      </div>
    </div>
  </div>
  <!-- Modal end -->
			</div>
		</div>
	</div>
	<br>
	<br>
  </div>
</body>
</html>