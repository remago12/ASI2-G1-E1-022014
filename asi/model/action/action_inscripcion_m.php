<?php

  require_once '../clases/cRegistro.php';
  require_once '../data/dataBase.php';
  require_once '../clases/cCorreo.php';


//variables POST
  $registro = new Registro();
  $correo = new Correo();

  $nombre       =$_POST['nombre'];
  $NIS          =$_POST['NIS'];
  $nombre       =$_POST['nombre'];
  $apellido     =$_POST['apellido'];
  $fechaNac     =$_POST['fechaNac'];
  $genero       =$_POST['genero'];
  $telcasa      =$_POST['telcasa'];
  $celular      =$_POST['telcel'];
  $email        =$_POST['email'];
  $dui          =$_POST['dui'];
  $pasaporte    =$_POST['pasaporte'];
  $calle        =$_POST['calle'];
  $casa         =$_POST['casa'];
  $colonia      =$_POST['colonia'];
  $municipio    =$_POST['municipio'];
  $fecha        =date('y-m-d');
  $grupo        =$_POST['grupo'];

 
try{

 //subida de imagen
  $ruta_carpeta="../../";
  $ruta_DB="../";
$archivo=$_FILES['imagen']['tmp_name'];
$nombreArchivo=$_FILES['imagen']['name'];
move_uploaded_file($archivo,$ruta_carpeta."fotos/".$nombreArchivo);

$rutag=$ruta_DB."fotos/".$nombreArchivo;

//arrays
    $reg=array($nombre,$apellido,$fechaNac,$genero,$telcasa,$celular,$email,$dui,$pasaporte,$rutag,$calle,$casa,$colonia,$municipio,$fecha); 
    $registro->crear_registro($reg);
    $nombreCompleto = $nombre." ".$apellido;
    $body = "Estimado".$nombreCompleto."su solicitud ha sido procesada se le notificara la decision posteriormente";
    $correo->enviarCorreo($email, $nombreCompleto, "Inscripcion procesada", $body )
    
    $reg3= array(1,1,$grupo);
    $registro->crear_inscripcion($reg3); 
  
  header('Location: inscripcion_miem.php');  

  }catch(Exception $e){

   header('Location:  error.php'); 
  }
   ?>