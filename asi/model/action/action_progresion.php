<?php  
require_once '../data/dataBase.php';
require_once '../clases/cCuadro_Clinico.php';

$clinico= New CuadroClinico;


$nomTipProg=$_POST['nomTipProg'];


try {
	
	$reg=array($nomTipProg); 
  	$clinico->crear_progresion($reg);

   header('Location: ../../controller/mantenimiento/progresion.php ');
} catch (Exception $e) {

	

}
