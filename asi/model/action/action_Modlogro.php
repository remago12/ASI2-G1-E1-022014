<?php 
require_once '../data/dataBase.php';
require_once '../clases/cCuadro_Clinico.php';


$registro =new CuadroClinico();

$nomLogro=	$_POST['nomLogro'];
$idReqLogro=	$_POST['idReqLogro'];
$id=		$_POST['idLogro'];
try{
	//arrays
	$Log= array($nomLogro, $idReqLogro, $id);
	$registro->mod_logro($Log);

	header('Location: ../../controller/mantenimiento/logro.php '); 

}catch(Exception $e){
	var_dump($e);
}	

	



