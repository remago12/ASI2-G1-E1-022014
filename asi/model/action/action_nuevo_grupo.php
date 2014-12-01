<?php

	require_once "../data/dataBase.php";
	require_once "../clases/cGrupo.php";

	$grupo = new Grupo;

	$numGrup			    =$_POST['numGrupo'];
	$nomGruo			    =$_POST['nomGrupo'];
	$exclGrup			    =$_POST['exclusivo'];
	$lugReuGrup		        =$_POST['lugarReunion'];
	$proLugGrup		        =$_POST['propLugar'];
	$fchaFundGrup	        =$_POST['fechFundacion'];
	$lugNacGrup             =$_POST['LugarFundacion'];
	$diaReuGrup		        =$_POST['dia_reu'];
	$horaReuGrup	        =$_POST['horaReunion'];
	$limMiemGrup	        =$_POST['limiteMiem'];
	$callGrup			    =$_POST['calle'];
	$numCasGrup 	        =$_POST['numCasa'];
	$colGrup 			    =$_POST['colonia'];
	$municipio_idMunic		=$_POST['municipio'];
	$latGrup			    =$_POST['txt_lat'];
	$lngGrup 			    =$_POST['txt_lng'];
	$idEst					= 1;
	$usuario_nomUsu         ='admin';
	$telefono               =$_POST['telefono'];

	try{

	$reg=array($numGrup,$nomGruo,$exclGrup,$lugReuGrup,$proLugGrup,$fchaFundGrup,$lugNacGrup,$diaReuGrup,$horaReuGrup,$limMiemGrup,$callGrup,$numCasGrup,$colGrup,$municipio_idMunic,$latGrup,$lngGrup,$idEst,$usuario_nomUsu, $telefono); 
    $grupo->crearGrupo($reg);

    	header('Location: ../../controller/nuevo_grupo.php');
     }catch(Exception $e){
     	header('Location:  error.php');
	 }
	 ?>