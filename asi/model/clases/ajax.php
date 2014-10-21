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
	
	case 'municipio':
		$response = Registro::seleccionar_municipio2($_POST['IdDept']);
		echo json_encode($response);
		break;

		case 'grupo':
		$response = Registro::seleccionar_grupo();
		echo json_encode($response);
		break;

		case 'coordenada':
		$response = Registro::seleccionar_grupo2($_POST['IdGrupo']);
		echo json_encode($response);
		break;

		case 'corrnis':
		$response = Registro::seleccionar_corrnis();
		echo json_encode($response);
		break;
}
}
	catch(Exception $e){
	die(json_encode(array('error' => $e->getMessage())));
}

?>