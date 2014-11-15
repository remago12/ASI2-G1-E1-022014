<?php
require_once '../data/dataBase.php';
require_once '../clases/cRenovacion.php';
require_once '../clases/cHistorial.php';

//variables POST
  $renovacion =new Renovacion();
  $historial =new Historial();

  $idPersona           =$_POST['idPer'];
  $fchaRen             =date('y-m-d');
  $estado_idEst        =7;
  $exeRen              ="N";
  $miembro_nisMiem     =$_POST['miembro_nisMiem'];
  $grupo_idGrup        =$_POST['idGrup'];
  $usuario             =$_POST['usuario'];
  $obserCamEst         ="Solicitud de Renovacion";
  $numSolicInsc        =$_POST["numSolicInsc"];

try{
//arrays
    $reg=array($fchaRen,$estado_idEst,$exeRen,$miembro_nisMiem,$grupo_idGrup);   
  $renovacion->crear_renovacion($reg,$idPersona);

  $estado= array($estado_idEst, $miembro_nisMiem);
  $renovacion->actualizar_estadoMiem($estado);

  $ins= array($estado_idEst, $numSolicInsc);
  $renovacion->actualizar_inscripcion($ins);
  
   $hestado= array($estado_idEst,$obserCamEst,$usuario,$miembro_nisMiem,$grupo_idGrup);
  $historial->crear_historialSR($hestado);  
  header('Location: ../../controller/perfilUsuario.php');  

   }catch(Exception $e){

  //header('Location:  consulta.php');  
    var_dump($e);
   }
  
   
?>