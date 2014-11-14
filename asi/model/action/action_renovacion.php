<?php
require_once '../data/dataBase.php';
require_once '../clases/cRenovacion.php';
require_once '../clases/cHistorial.php';

//variables POST
  $renovacion =new Renovacion();
  $historial =new Historial();

  $numSolRen           =$_POST['idRen'];
  $estado_idEst        =7;
  $estado_M            =4;
  $numFactRen          =$_POST['numFactRen'];
  $fchaPagRen          =$_POST['fchaPagRen'];
  $montoRen            =$_POST['montoRen'];
  $banco_idBanc        =$_POST['banco_idBanc'];
  $miembro_nisMiem     =$_POST['miembro_nisMiem'];
  $grupo_idGrup        =$_POST['idGrup'];
  $usuario             =$_POST['usuario'];
  $obserCamEst         ="Validacion de Renovacion";

try{
  //subida de imagen
  $ruta_carpeta="../../";
  $ruta_DB="../";
$archivo=$_FILES['imagen']['tmp_name'];
$nombreArchivo=$_FILES['imagen']['name'];
move_uploaded_file($archivo,$ruta_carpeta."imagenes/".$nombreArchivo);

$rutag=$ruta_DB."imagenes/".$nombreArchivo;
//arrays
    $reg=array($estado_idEst,$numFactRen,$fchaPagRen,$montoRen,$banco_idBanc,$rutag,$miembro_nisMiem);   
  $renovacion->actualizar_renovacion($reg);  

  $estado= array($estado_M, $miembro_nisMiem);
  $renovacion->actualizar_estadoMiem($estado);

  $hestado= array($estado_idEst,$obserCamEst,$usuario,$miembro_nisMiem,$grupo_idGrup,$numSolRen);
  $historial->crear_historialR($hestado); 
  header('Location: ../../controller/perfilUsuario.php');  

   }catch(Exception $e){

  //header('Location:  consulta.php');  
    var_dump($e);
   }
  
   
?>