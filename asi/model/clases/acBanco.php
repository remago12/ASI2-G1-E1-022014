<?php 
require_once '../data/dataBase.php';
require_once 'cbanco.php';


$banco = new Banco();

$nombreBan=$_POST['nomBanco'];
$numCuenta=$_POST['numCuenta'];
try{
	//arrays
	$ingBan= array($numCuenta,$nombreBan);
	$banco->crear_banco($ingBan);

}catch(Exception $e){
	var_dump($e);
}	

	



