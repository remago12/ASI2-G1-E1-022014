<?php

require_once '../data/dataBase.php';
require_once 'cCuadro_Clinico.php';



//variables POST
  $registro =new CuadroClinico();

  $nombre                =$_POST['nomEst'];
  $id                    =$_POST['idEst'];
try{
 
//arrays
 
    $reg=array($nombre, $id); 
  $registro->mod_estado($reg);
  

   //var_dump($reg);
  
  header('Location: ../../views/mantenimiento/estado.tpl.php ');  

   }catch(Exception $e){

  header('Location:  consulta.php');  
//echo "$e";
    //var_dump($e);
   }
  
   
?>