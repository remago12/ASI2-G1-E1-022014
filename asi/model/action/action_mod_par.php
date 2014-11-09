<?php

require_once '../data/dataBase.php';
require_once '../clases/cCuadro_Clinico.php';



//variables POST
  $registro =new CuadroClinico();

  $nombre                =$_POST['nomPar'];
  $id                    =$_POST['idPar'];
try{
 
//arrays
 
    $reg=array($nombre, $id); 
  $registro->mod_parentesco($reg);
  

   //var_dump($reg);
  
  header('Location: ../../views/mantenimiento/parentesco.tpl.php ');  

   }catch(Exception $e){

  header('Location:  consulta.php');  
//echo "$e";
    //var_dump($e);
   }
  
   
?>