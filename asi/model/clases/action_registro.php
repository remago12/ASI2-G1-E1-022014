<?php

require_once 'C:\xampp\htdocs\ASI2-G1-E1-022014\asi\html\clases/cRegistro.php';
require_once 'C:\xampp\htdocs\ASI2-G1-E1-022014\asi\html\data/dataBase.php';



//variables POST
  $registro =new Registro();

  $nombre			=$_POST['nombre'];
  $apellido			=$_POST['apellido'];
  $fechaNac			=$_POST['fechaNac'];
  $telefono			=$_POST['telefono'];
  $celular			=$_POST['celular'];
  $dui				=$_POST['dui'];
  $pasaporte		=$_POST['pass'];
  $imagen			=$_POST['imagen'];
  $calle			=$_POST['calle'];
  $casa				=$_POST['casa'];
  $colonia			=$_POST['colonia'];
  $municipio		=$_POST['municipio'];
  $fecha			=date('y-m-d');

try{
 
//arrays
 
    $reg=array($nombre, $apellido, $fechaNac, $telefono, $celular,$dui,$pasaporte,$imagen,$calle,$casa,$colonia,$municipio,$fecha); 
	$registro->crear_registro($reg);
	

	 //var_dump($reg);
  
	//header('Location: inscripcion_m.php ');	 

	 }catch(Exception $e){

	 //header('Location:  consulta.php');	
//echo "$e";
	 	var_dump($e);
	 }
	
	 
?>