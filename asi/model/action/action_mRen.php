<?php
	require_once '../clases/cRegistro.php';
 	 require_once '../data/dataBase.php';
 	 require_once '../clases/cCorreo.php';
 	 require_once '../clases/cRenovacion.php';

 	$registro = new Registro();
 	$correo = new Correo();
 	$renovacion   =new Renovacion();


 	$idI = base64_decode($_GET['idI']);
 	$nombre = $_POST['nombre'];
 	$apellido = $_POST['apellido'];
 	$correoP = $_POST['correo'];
 	$idEstado = $_POST['estado_inscripcion'];
 	$NIS = $_POST['NIS'];
 	 echo $idI;
 	 echo "<br>";
 	 echo $idEstado;
 	echo "<br>";
 	 echo $NIS;
if ($idEstado == 4){
 	   $estado= array(13, $NIS);
  		$renovacion->actualizar_estadoMiem($estado);
 	   	$nombreCompleto = $nombre." ".$apellido;
    	$body = "Estimado ".$nombreCompleto." su solicitud ha sido aprobada puede ingresar al sistema con el usuario: ";
    	$correo->enviarCorreo($correoP, $nombreCompleto, "Renovacion aprobadas", $body );
 	}
 	elseif($idEstado == 5){
 		$estado= array(8, $NIS);
  		$renovacion->actualizar_estadoMiem($estado);
 		 	$nombreCompleto = $nombre." ".$apellido;
    	$body = "Estimado ".$nombreCompleto." ha realizado el pago de su renovacion exitosamente";
    	$correo->enviarCorreo($correoP, $nombreCompleto, "Renovacion aceptadas", $body );
 		
 	}elseif($idEstado == 6 ){
 		$estado= array(10, $NIS);
  		$renovacion->actualizar_estadoMiem($estado);
 		 	$nombreCompleto = $nombre." ".$apellido;
    	$body = "Estimado ".$nombreCompleto." lo sentimos, pero su solicitud ha sido rechazada";
    	$correo->enviarCorreo($correoP, $nombreCompleto, "Renovacion Rechazada", $body );
 		
 	}
 	header('Location:../../controller/admin/solicitudes_renovacion.php');
?>