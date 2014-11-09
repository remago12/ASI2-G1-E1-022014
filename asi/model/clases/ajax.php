<?php
require_once '../data/dataBase.php';
require_once 'cRegistro.php';
require_once 'cInscripcion.php';
require_once 'cSolicitudes.php';
require_once 'cGrupos.php';

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

		case 'num_inscripcion':
		$response = Inscripcion::seleccionar_numinscripcion($_POST['year']);
		echo json_encode($response);
		break;

		case 'inscripcion':
		$response = Inscripcion::seleccionar_inscripcion($_POST['idPersona']);
		echo json_encode($response);
		break;

		case 'persona':
		$response = Inscripcion::seleccionar_persona($_POST['num_SolicInsc']);
		echo json_encode($response);
		break;

		case 'estado':
		$response = Inscripcion::seleccionar_estado();
		echo json_encode($response);
		break;

		case 'solic_inscripciones':
		$response = Solicitud::seleccionar_inscripciones($_POST['IdGrup'],$_POST['IdDep'],$_POST['IdMun'],$_POST['IdEst'],$_POST['Inicio'],$_POST['Limite']);
		echo json_encode($response);
		break;

		case'contar_inscripciones':
		$response = Solicitud::contar_inscripciones($_POST['IdGrup'],$_POST['IdDep'],$_POST['IdMun'],$_POST['IdEst']);
		echo json_encode($response);
		break;

		case 'grupos':
		$response = Grupos::seleccionar_grupos($_POST['IdDep'],$_POST['IdMun'],$_POST['Inicio'],$_POST['Limite']);
		echo json_encode($response);
		break;

		case'contar_grupos':
		$response = Grupos::contar_grupos($_POST['IdDep'],$_POST['IdMun']);
		echo json_encode($response);
		break;	
}
}
	catch(Exception $e){
	die(json_encode(array('error' => $e->getMessage())));
}

?>