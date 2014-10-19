<?php
	

	require "../views/login.tpl.php";
	require "../model/data/dataBase.php";
	require "../model/clases/cUsuario.php";



	$usuario = new Usuario;

	if ( $usuario->verSession() == true ) {
    	header("Location: inscripcion_m.php");
    	exit();
  	}

	$usuario->ingresoUsuario();


