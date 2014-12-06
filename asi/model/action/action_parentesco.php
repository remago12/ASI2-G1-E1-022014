<?php  
require_once '../data/dataBase.php';
require_once '../clases/cCuadro_Clinico.php';

$clinico= New CuadroClinico;


$nombre=$_POST['nomCont'];
$apellido=$_POST['apelCont'];
$telefono=$_POST['telCont'];
$id_par=$_POST['id_par'];
$NIS=$_POST['miembro_nisMiem'];

try {
	
	$reg=array($apellido,$nombre,$telefono,$id_par,$NIS); 
  	$clinico->crear_contacto($reg);

   header('Location: ../../controller/perfilUsuario.php ');
} catch (Exception $e) {

	

}
