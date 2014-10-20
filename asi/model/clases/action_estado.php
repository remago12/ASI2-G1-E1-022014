<?php  
require_once '../data/dataBase.php';
require_once 'cCuadro_Clinico.php';

$clinico= New CuadroClinico;


$nombre=$_POST['nomEst'];

try {
	
	$reg=array($nombre); 
  	$clinico->crear_estado($reg);

   header('Location: ../../views/mantenimiento/estado.tpl.php ');
} catch (Exception $e) {

	

}
