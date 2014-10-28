<?php
	

	require_once "../views/login.tpl.php";
	require_once "../model/data/dataBase.php";
	require_once "../model/clases/cUsuario.php";



	$usuario = new Usuario;


	$user = $_POST['username'];
	$psw  = $_POST['password'];


	//if ( $usuario->verSession() == true ) {
    //	header("Location: inscripcion_m.php");
    //	exit();
  	//}

	


	try{
	$params = array($user,$psw);	
	$usuario->ingreso($params);


     }catch(Exception $e){

	 }


