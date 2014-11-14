<?php
require_once '../model/data/dataBase.php';
	require_once '../model/clases/cLogUsuario.php';


session_start();




	$oLogUsuario = new logUsuario();

	$fchaSalir = date('c');
	
	$user = $_SESSION['usuario'];
	$cod = $oLogUsuario->obtenerCorrelativo($user);
	//echo "Código obtenido: ".$cod;

    $datosLogout = array($fchaSalir, $cod);
    $oLogUsuario->salir($datosLogout);



session_destroy();



session_start();
if(@$_SESSION['UserID']>0){
	
}else{
	header ("Location: login.php");
	
}

?>