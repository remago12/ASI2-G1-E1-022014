<?php
require_once '../data/dataBase.php';
require_once '../clases/cInscripcion.php';
require_once '../clases/cHistorial.php';
require_once '../clases/cRenovacion.php';

//variables POST
  $Inscripcion  =new Inscripcion();
  $historial    =new Historial();
  $renovacion   =new Renovacion();

  $idInsc          =$_POST['idInsc'];
  $fchaIns             =date('y-m-d');
  $estado_idEst        =3;
  $exeIns              ="N";
  $numFactIns        =$_POST['numFactRen'];
  $fchaPagIns          =$_POST['fchaPagRen'];
  $montoIns           =$_POST['montoRen'];
  $banco_idBanc        =$_POST['banco_idBanc'];
  $miembro_nisMiem     =$_POST['miembro_nisMiem'];
  $grupo_idGrup        =$_POST['idGrup'];
  $usuario             =$_POST['usuario'];
  $obserCamEst         ="Validacion de Inscripcion";

try{
  //subida de imagen
  $ruta_carpeta="../../";
  $ruta_DB="../";
$archivo=$_FILES['imagen']['tmp_name'];
$nombreArchivo=$_FILES['imagen']['name'];
move_uploaded_file($archivo,$ruta_carpeta."imagenes/".$nombreArchivo);

$rutag=$ruta_DB."imagenes/".$nombreArchivo;
//arrays
    $reg=array($estado_idEst,$exeIns,$numFactIns,$fchaPagIns,$montoIns,$banco_idBanc,$rutag,$idInsc);   
  $Inscripcion->pago_inscripcion($reg);

  $estado= array($estado_idEst, $miembro_nisMiem);
  $renovacion->actualizar_estadoMiem($estado);

  $hestado= array($estado_idEst,$obserCamEst,$usuario,$miembro_nisMiem,$grupo_idGrup,$idInsc);
  $historial->crear_historial($hestado);  
  header('Location: ../../controller/perfilUsuario.php');  

   }catch(Exception $e){

  //header('Location:  consulta.php');  
    var_dump($e);
   }
  
   
?>