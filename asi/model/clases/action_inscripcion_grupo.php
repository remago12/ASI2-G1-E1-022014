<?php

require_once 'cGrupo.php';



//variables POST
  $grupo = new Grupo();

  $numGrup			          =$_POST['numGrupo'];
  $nomGruo			          =$_POST['nomGrupo'];
  $exclGrup			          =$_POST['exclusivo'];
  $lugReuGrup		          =$_POST['lugarReunion'];
  $proLugGrup		          =$_POST['propLugar'];
  $fchaFundGrup	          =$_POST['fecFundacion'];
  $lugNacGrup             =$_POST['LugarFundacion'];
  $diaReuGrup		          =$_POST['dia_reu'];
  $horaReuGrup	          =$_POST['horaReunion'];
  $limMiemGrup	          =$_POST['limiteMiem'];
  $callGrup			          =$_POST['calle'];
  $numCasGrup 	          =$_POST['num_cas'];
  $colGrup 			          =$_POST['colonia'];
  $municipio_idMunic		  =$_POST['municipio'];
  $latGrup			          =$_POST['txt_lat'];
  $lngGrup 			          =$_POST['txt_lng'];
  $fchaCreaGrup 	        =date('y-m-d');
  $usuario_nomUsu         =$_POST['usuario'];
  $telefono               =$_POST['telefono'];
try{
 
//arrays
 
    $reg=array($numGrup,$nomGruo,$exclGrup,$lugReuGrup,$proLugGrup,$fchaFundGrup,$lugNacGrup,$diaReuGrup,$horaReuGrup,$limMiemGrup,$callGrup,$numCasGrup,$colGrup,$municipio_idMunic,$latGrup,$lngGrup,$estado_idEst,$fchaCreaGrup,$usuario_nomUsu); 
    $grupo->crearGrupo($reg);
	

	 //var_dump($reg);
  
	header('Location: ../grupos_scout.php ');	 

	 }catch(Exception $e){

	header('Location:  consulta.php');	
//echo "$e";
    //var_dump($e);
	 }
	
	 
?>