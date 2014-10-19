<?php

	require "../views/inscripcion_grupo.tpl.php";
	require "../model/data/dataBase.php";
	require "../model/clases/cGrupo.php";

	$grupo = new Grupo;

	$grupo->crearGrupo;

	
