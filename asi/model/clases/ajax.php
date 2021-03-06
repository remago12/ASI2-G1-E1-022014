<?php
require_once '../data/dataBase.php';
require_once 'cRegistro.php';
require_once 'cInscripcion.php';
require_once 'cSolicitudes.php';
require_once 'cGrupos.php';
require_once 'cMiembros.php';
require_once 'cCuadro_Clinico.php';

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

		case 'estado_inscripcion':
		$response = Inscripcion::seleccionar_estado_inscripcion();
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

		case 'solic_renovaciones':
		$response = Solicitud::seleccionar_renovaciones($_POST['IdGrup'],$_POST['IdDep'],$_POST['IdMun'],$_POST['IdEst'],$_POST['Inicio'],$_POST['Limite']);
		echo json_encode($response);
		break;

		case'contar_renovaciones':
		$response = Solicitud::contar_renovaciones($_POST['IdGrup'],$_POST['IdDep'],$_POST['IdMun'],$_POST['IdEst']);
		echo json_encode($response);
		break;

		case 'grupos':
		$response = Grupos::seleccionar_grupos($_POST['IdDep'],$_POST['IdMun'],$_POST['Nomgrup'],$_POST['IdGrup'],$_POST['Inicio'],$_POST['Limite']);
		echo json_encode($response);
		break;

		case'contar_grupos':
		$response = Grupos::contar_grupos($_POST['IdDep'],$_POST['IdMun'],$_POST['Nomgrup'],$_POST['IdGrup']);
		echo json_encode($response);
		break;	

		case 'miembros':
		$response = Miembros::seleccionar_miembros($_POST['nis'],$_POST['IdDep'],$_POST['IdMun'],$_POST['IdGrup'],$_POST['Gen'],$_POST['nombre'],$_POST['apellido'],$_POST['Inicio'],$_POST['Limite']);
		echo json_encode($response);
		break;

		case'contar_miembros':
		$response = Miembros::contar_miembros($_POST['nis'],$_POST['IdDep'],$_POST['IdMun'],$_POST['IdGrup'],$_POST['Gen'],$_POST['nombre'],$_POST['apellido']);
		echo json_encode($response);
		break;

			case 'seleccionar_NIS':
		$response = Inscripcion::seleccionar_NIS($_POST['idI']);
		echo json_encode($response);
		break;

		case 'padecimientos':
		$response = CuadroClinico::seleccionar_padecimientos();
		echo json_encode($response);
		break;

		case 'cuadro_clinico':
		$response = CuadroClinico::verificar_cuadroclinico($_POST['NIS']);
		echo json_encode($response);
		break;

		case 'dato_padecimiento':
		$response = CuadroClinico::dato_padecimiento($_POST['NIS']);
		echo json_encode($response);
		break;

case 'nuevo_cuadro':
		$response = CuadroClinico::nuevo_cuadro($_POST['NIS'],$_POST['Sangre']);
		echo json_encode($response);
		break;

case 'modificar_sangre':
		$response = CuadroClinico::modificar_sangre($_POST['NIS'],$_POST['Sangre']);
		echo json_encode($response);
		break;

		case 'guardar_padecimiento':
		$response = CuadroClinico::guardar_padecimiento($_POST['NIS'],$_POST['Padecimiento']);
		echo json_encode($response);
		break;

		case 'borrar_padecimiento':
		$response = CuadroClinico::borrar_padecimiento($_POST['NIS'],$_POST['idPad']);
		echo json_encode($response);
		break;

		case 'alergias':
		$response = CuadroClinico::seleccionar_alergias();
		echo json_encode($response);
		break;

case 'guardar_alergia':
		$response = CuadroClinico::guardar_alergia($_POST['NIS'],$_POST['Alergia']);
		echo json_encode($response);
		break;

		case 'dato_alergia':
		$response = CuadroClinico::dato_alergia($_POST['NIS']);
		echo json_encode($response);
		break;

		case 'borrar_alergia':
		$response = CuadroClinico::borrar_alergia($_POST['NIS'],$_POST['idAl']);
		echo json_encode($response);
		break;

		case 'discapacidades':
		$response = CuadroClinico::seleccionar_discapacidades();
		echo json_encode($response);
		break;

		case 'guardar_discapacidad':
		$response = CuadroClinico::guardar_discapacidad($_POST['NIS'],$_POST['Discapacidad']);
		echo json_encode($response);
		break;

		case 'dato_discapacidad':
		$response = CuadroClinico::dato_discapacidad($_POST['NIS']);
		echo json_encode($response);
		break;

		case 'borrar_discapacidad':
		$response = CuadroClinico::borrar_discapacidad($_POST['NIS'],$_POST['idDis']);
		echo json_encode($response);
		break;

}
}
	catch(Exception $e){
	die(json_encode(array('error' => $e->getMessage())));
}

?>