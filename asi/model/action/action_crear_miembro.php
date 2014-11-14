<?php
	require_once '../clases/cRegistro.php';
 	 require_once '../data/dataBase.php';
 	 require_once '../clases/cCorreo.php';
 	$registro = new Registro();
 	$correo = new Correo();


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
 	 $reg=array($NIS,$NIS,3);
 	  $registro->crear_usuario($reg); 
 	  $reg2=array($NIS,12,$NIS);
 	  $registro->crear_miembro($reg2,$idI);
 	   $reg3=array($idEstado,$idI);
 	   $registro->estado_inscripcion($reg3);
 	   	$nombreCompleto = $nombre." ".$apellido;
    	$body = "Estimado ".$nombreCompleto." su solicitud ha sido aprobada puede ingresar al sistema con el usuario: ".$NIS." contraseña:".$NIS;
    	$correo->enviarCorreo($correoP, $nombreCompleto, "Inscripcion aprobadas", $body );
 	}
 	elseif($idEstado == 5){
 		$reg1=array($idEstado,$idI);
 	   $registro->estado_inscripcion($reg1);
 		 	$nombreCompleto = $nombre." ".$apellido;
    	$body = "Estimado ".$nombreCompleto." ha realizado el pago de su inscripcion exitosamente";
    	$correo->enviarCorreo($correoP, $nombreCompleto, "Inscripcion aceptadas", $body );
 		
 	}elseif($idEstado == 6 ){
 		$reg1=array($idEstado,$idI);
 	   $registro->estado_inscripcion($reg1);
 		 	$nombreCompleto = $nombre." ".$apellido;
    	$body = "Estimado ".$nombreCompleto." lo sentimos, pero su solicitud ha sido rechazada";
    	$correo->enviarCorreo($correoP, $nombreCompleto, "Inscripcion Rechazada", $body );
 		
 	}
 	header('Location:../../controller/admin/solicitudes_inscripcion.php');
?>