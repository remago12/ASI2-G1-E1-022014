<?php
	require_once 'cRegistro.php';
 	 require_once '../data/dataBase.php';
 	$registro = new Registro();


 	$idI = base64_decode($_GET['idI']);
 	$idEStado = $_POST['estado'];
 	$NIS = $_POST['NIS'];
 	$NIS= $NIS;
 	 echo $idI;
 	 echo "<br>";
 	 echo $idEStado;
 	echo "<br>";
 	 echo $NIS;
if ($idEStado == 4){
 	 $reg=array($NIS,$NIS,3);
 	  $registro->crear_usuario($reg); 
 	  $reg2=array($NIS,12,$NIS);
 	  $registro->crear_miembro($reg2,$idI);
 	   $reg3=array($idEStado,$idI);
 	   $registro->estado_inscripcion($reg3);
 	  
 	 /*$reg=array(1);
 	  $reg2=array($idEStado);
 	  $registro->crear_miembro2($reg,$reg2,$idI);
*/
 	}
 	else
 	{
 		
 	}
 	header('Location:../../views/admin/solicitudes_inscripcion.php');
?>