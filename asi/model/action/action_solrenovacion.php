<?php
require_once '../data/dataBase.php';
require_once '../clases/cRenovacion.php';
require_once '../clases/cHistorial.php';

//variables POST
  $renovacion =new Renovacion();
  $historial =new Historial();

  $idPersona           =$_POST['idPer'];
  $fchaRen             =date('y-m-d');
  $estado_idEst        =1;
  $exeRen              ="N";
  $miembro_nisMiem     =$_POST['miembro_nisMiem'];
  $grupo_idGrup        =$_POST['idGrup'];
  $usuario             =$_POST['usuario'];
  $obserCamEst         =Solicitud de Renovacion;

try{
//arrays
    $reg=array($fchaRen,$estado_idEst,$exeRen,$miembro_nisMiem,$grupo_idGrup);   
  $renovacion->crear_renovacion($reg,$idPersona);

  $estado= array($estado_idEst, $miembro_nisMiem);
  $renovacion->actualizar_estadoMiem($estado);

   $hestado= array($estado_idEst,$obserCamEst,$usuario,$miembro_nisMiem);
  $historial->crear_historial($hestado);  
  header('Location: ../../views/perfilUsuario.tpl.php');  

   }catch(Exception $e){

  //header('Location:  consulta.php');  
    var_dump($e);
   }
  
   
?>