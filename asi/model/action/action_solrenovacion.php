<?php
require_once '../data/dataBase.php';
require_once '../clases/cRenovacion.php';

//variables POST
  $renovacion =new Renovacion();

  $idPersona           =$_POST['idPer'];
  $fchaRen             =date('y-m-d');
  $estado_idEst        =1;
  $exeRen              ="N";
  $miembro_nisMiem     =$_POST['miembro_nisMiem'];
  $grupo_idGrup        =$_POST['idGrup'];

try{
//arrays
    $reg=array($fchaRen,$estado_idEst,$exeRen,$miembro_nisMiem,$grupo_idGrup);   
  $renovacion->crear_renovacion($reg,$idPersona);

  $estado= array($estado_idEst, $miembro_nisMiem);
  $renovacion->actualizar_estadoMiem($estado);  
  header('Location: ../../views/perfilUsuario.tpl.php');  

   }catch(Exception $e){

  //header('Location:  consulta.php');  
    var_dump($e);
   }
  
   
?>