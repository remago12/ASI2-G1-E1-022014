<?php

require_once '../data/dataBase.php';
require_once '../clases/cCuadro_Clinico.php';



//variables POST
  $registro =new CuadroClinico();

  $nombre                =$_POST['nomPad'];
  $id                    =$_POST['idPad'];
try{
 
//arrays
 
    $reg=array($nombre, $id); 
  $registro->mod_padecimiento($reg);
  

   //var_dump($reg);
  
  header('Location: ../../views/mantenimiento/padecimiento.tpl.php ');  

   }catch(Exception $e){

  header('Location:  consulta.php');  
//echo "$e";
    //var_dump($e);
   }
  
   
?>