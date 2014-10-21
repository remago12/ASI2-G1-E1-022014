<?php


  require_once '../model/clases/cRegistro.php';
  require_once '../model/data/dataBase.php';

//variables POST
  $registro =new Registro();

  $NIS       = $_POST['NIS'];
  $nombre     =$_POST['nombre'];
  $apellido     =$_POST['apellido'];
  $fechaNac     =$_POST['fechaNac'];
  $genero       =$_POST['genero'];
  $telcasa      =$_POST['telcasa'];
  $celular      =$_POST['telcel'];
  $email        =$_POST['email'];
  $dui          =$_POST['dui'];
  $pasaporte    =$_POST['pasaporte'];
  //$img          =$_FILES['file']['name'];
  //$imagen       =$_POST['file'];
  $calle      =$_POST['calle'];
  $casa       =$_POST['casa'];
  $colonia      =$_POST['colonia'];
  $municipio    = $_POST['municipio'];
  $fecha      =date('y-m-d');
  $numGrupo     =$_POST['grupo'];

 
try{
 
//arrays
 
    $reg=array($nombre,$apellido,$fechaNac,$genero,$telcasa,$celular,$email,$dui,$pasaporte,$calle,$casa,$colonia,$municipio,$fecha); 
  $registro->crear_registro($reg);


  $idPersona = mysql_insert_id();

  $reg2=array($NIS,$NIS,2);
  $registro->crear_usuario($reg2);

  $reg3= array($NIS,$fecha,$idPersona,1,$NIS,$numGrupo)
  $registro->crear_miembro($reg3);

  //$reg3=array($NIS,)

   //var_dump($reg);
  
  //header('Location: inscripcion_m.php ');  

   }catch(Exception $e){

   //header('Location:  consulta.php'); 
//echo "$e";
    var_dump($e);
   }