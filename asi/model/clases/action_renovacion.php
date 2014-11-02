<?php
require_once '../data/dataBase.php';
require_once 'cRenovacion.php';

//variables POST
  $renovacion =new Renovacion();

  $numSolRen           =$_POST['numSolRen'];
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
  $ruta="../../";
$archivo=$_FILES['imagen']['tmp_name'];
$nombreArchivo=$_FILES['imagen']['name'];
move_uploaded_file($archivo,$ruta."imagenes/".$nombreArchivo);

$ruta=$ruta."imagenes/".$nombreArchivo;
//arrays
    $reg=array($numSolRen,$fchaRen,$estado_idEst,$exeRen,$numFactRen,$fchaPagRen,$montoRen,$banco_idBanc,$miembro_nisMiem,$grupo_idGrup,$ruta);   
  $renovacion->crear_renovacion($reg);  
  header('Location: ../../views/perfilUsuario.tpl.php');  

   }catch(Exception $e){

  //header('Location:  consulta.php');  
    var_dump($e);
   }
  
   
?>