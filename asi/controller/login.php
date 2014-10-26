<?php
	

	require_once '../views/login.tpl.php';
	require_once '../model/data/dataBase.php';
	require_once '../model/clases/cUsuario.php';



	$usuario = new Usuario;


	$user = $_POST['username'];
	$psw  = $_POST['password'];

	$params = array($user,$psw);

	//if ( $usuario->verSession() == true ) {
    //	header("Location: inscripcion_m.php");
    //	exit();
  	//}

	


	try{

	$usuario->ingreso($params);


     }catch(Exception $e){

	 }


