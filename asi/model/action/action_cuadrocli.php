<?php 
require_once '../data/dataBase.php';
require_once '../clases/cCuadro_Clinico.php';


$cuadro =new CuadroClinico();

$tiposang=$_POST['sangre'];
$nis=$_POST['miembro_nisMiem'];
try{
	//arrays
	$ingBan= array($tiposang,$nis);
	$cuadro->crear_cuadrocli($ingBan);
	
	header('Location: ../../controller/perfilUsuario.php '); 
}catch(Exception $e){
	var_dump($e);
}	

	



