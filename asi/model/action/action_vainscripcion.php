<?php
require_once '../data/dataBase.php';
require_once 'cInscripcion.php';

//variables POST
  $Inscripcion =new Inscripcion();

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

try{
  //subida de imagen
  $ruta_carpeta="../../";
  $ruta_DB="../";
$archivo=$_FILES['imagen']['tmp_name'];
$nombreArchivo=$_FILES['imagen']['name'];
move_uploaded_file($archivo,$ruta_carpeta."imagenes/".$nombreArchivo);

$rutag=$ruta_DB."imagenes/".$nombreArchivo;
//arrays
    $reg=array($exeIns,$estado_idEst,$numFactIns,$fchaPagIns,$montoIns,$banco_idBanc,$rutag,$idInsc);   
  $Inscripcion->pago_inscripcion($reg);  
  header('Location: ../../views/perfilUsuario.tpl.php');  

   }catch(Exception $e){

  //header('Location:  consulta.php');  
    var_dump($e);
   }
  
   
?>