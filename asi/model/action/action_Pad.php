<?php  
require_once '../data/dataBase.php';
require_once '../clases/cCuadro_Clinico.php';

$clinico= New CuadroClinico;


$nombre=$_POST['nomPad'];

try {
	
	$reg=array($nombre); 
  	$clinico->crear_padecimiento($reg);

   header('Location: ../../views/mantenimiento/padecimiento.tpl.php ');
} catch (Exception $e) {

	

}
