<?php
require_once '../data/dataBase.php';
require_once 'cRenovacion.php';

//variables POST
  $renovacion =new Renovacion();

  $idPersona           =$_POST['idPer'];
  $fchaRen             =date('y-m-d');
  $estado_idEst        =4;
  $exeRen              ="N";
  $numFactRen          =$_POST['numFactRen'];
  $fchaPagRen          =$_POST['fchaPagRen'];
  $montoRen            =$_POST['montoRen'];
  $banco_idBanc        =$_POST['banco_idBanc'];
  $miembro_nisMiem     =$_POST['miembro_nisMiem'];
  $grupo_idGrup        =$_POST['idGrup'];

try{
  //subida de imagen
  $ruta_carpeta="../../";
  $ruta_DB="../";
$archivo=$_FILES['imagen']['tmp_name'];
$nombreArchivo=$_FILES['imagen']['name'];
move_uploaded_file($archivo,$ruta_carpeta."imagenes/".$nombreArchivo);

$rutag=$ruta_DB."imagenes/".$nombreArchivo;
//arrays
    $reg=array($fchaRen,$estado_idEst,$exeRen,$numFactRen,$fchaPagRen,$montoRen,$banco_idBanc,$miembro_nisMiem,$grupo_idGrup,$rutag);   
  $renovacion->crear_renovacion($reg,$idPersona);  
  header('Location: ../../views/perfilUsuario.tpl.php');  

   }catch(Exception $e){

  //header('Location:  consulta.php');  
    var_dump($e);
   }
  
   
?>