<?php

	require "../model/data/dataBase.php";
	require "../model/clases/cUsuario.php";



    $user = $_POST["algo"];
	$psw = $_POST["password"];

	echo $user;
	echo $psw;

	//if ( $usuario->verSession() == true ) {
    //	header("Location: inscripcion_m.php");
    //	exit();
  	//}

	


	try{
	print_r($params = array($user,$psw));	
	$usuario->ingreso($params);
    }catch(Exception $e){
	}




?>