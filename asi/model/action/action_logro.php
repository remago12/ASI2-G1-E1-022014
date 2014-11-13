<?php  
require_once '../data/dataBase.php';
require_once '../clases/cCuadro_Clinico.php';

$clinico= New CuadroClinico;


$nomLogro=$_POST['nomLogro'];
$requisito=$_POST['idReqLogro'];

try {
	
	$reg=array($nomLogro,$requisito); 
  	$clinico->crear_Logro($reg);

   header('Location: ../../controller/mantenimiento/logro.php ');
} catch (Exception $e) {

	

}
