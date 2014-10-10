<?php
require_once '../data/dataBase.php';
require_once 'cRegistro.php';


$response =array();
try{
switch ($_POST['action']) {
	case 'departamento':
		$response = Registro::seleccionar_departamento2();
		echo json_encode($response);
		break;
	
	case 'num_grupo':
		# code...
		break;
}
}
	catch(Exception $e){
	die(json_encode(array('error' => $e->getMessage())));
}

?>