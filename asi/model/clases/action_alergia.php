<?php

require_once '../data/dataBase.php';
require_once 'cCuadro_Clinico.php';



//variables POST
  $registro =new CuadroClinico();

  $nombre                =$_POST['nomAlergia'];
try{
 
//arrays
 
    $reg=array($nombre); 
  $registro->crear_alergia($reg);
  

   //var_dump($reg);
  
  header('Location: ../../views/mantenimiento/alergias.tpl.php ');  

   }catch(Exception $e){

  header('Location:  consulta.php');  
//echo "$e";
    //var_dump($e);
   }
  
   
?>