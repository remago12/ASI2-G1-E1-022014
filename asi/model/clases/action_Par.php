<?php  
require_once '../data/dataBase.php';
require_once 'cCuadro_Clinico.php';

$clinico= New CuadroClinico;


$nombre=$_POST['nomPar'];

try {
	
	$reg=array($nombre); 
  	$clinico->crear_parentesco($reg);

   header('Location: ../../views/mantenimiento/parentesco.tpl.php ');
} catch (Exception $e) {

	

}
