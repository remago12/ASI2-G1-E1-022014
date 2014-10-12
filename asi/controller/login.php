<?php
	

	require "../views/login.tpl.php";
	require "../model/data/dataBase.php";
	require "../model/clases/cUsuario.php";


	$usuario = new Usuario;
	$usuario->ingresoUsuario();


