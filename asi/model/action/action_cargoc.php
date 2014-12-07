<?php  
require_once '../data/dataBase.php';
require_once '../clases/cExpediente.php';

$expediente= New Expedientes;


$miembro=$_POST['miembro_nisMiem'];
$idcargo=$_POST['id_cargoc'];
$fecha=date('y-m-d');
$usuario=$_POST['usuario'];
try {
	
	$reg=array($miembro,$idcargo,$fecha,$usuario); 
  	$expediente->crear_miembroCargo($reg);

   header('Location: ../../controller/expediente_miembro_admin.php');

} catch (Exception $e) {

	

}
