<?php

require_once '/var/www/html/html/ASI2-G1-E1-022014/asi/html/data/dataBase.php';
require_once '/var/www/html/html/ASI2-G1-E1-022014/asi/html/clases/cRegistro.php';



//variables POST
  $registro =new Registro();

  $numGrup			          =$_POST['num_grup'];
  $nomGruo			          =$_POST['nom_grup'];
  $exclGrup			          =$_POST['exclusivo'];
  $lugReuGrup		          =$_POST['lug_reu'];
  $proLugGrup		          =$_POST['pro_reu'];
  $fchaFundGrup	          =$_POST['fech_funda'];
  $lugNacGrup             =$_POST['lug_nac'];
  $diaReuGrup		          =$_POST['dia_reu'];
  $horaReuGrup	          =$_POST['hora_reu'];
  $limMiemGrup	          =$_POST['lim_miem'];
  $callGrup			          =$_POST['calle'];
  $numCasGrup 	          =$_POST['num_cas'];
  $colGrup 			          =$_POST['colonia'];
  $municipio_idMunic		  =$_POST['municipio'];
  $latGrup			          =$_POST['txt_lat'];
  $lngGrup 			          =$_POST['txt_lng'];
  $estado_idEst           =$_POST['estado'];
  $fchaCreaGrup 	        =date('y-m-d');
  $usuario_nomUsu         =$_POST['usuario'];
try{
 
//arrays
 
    $reg=array($nomGruo,$exclGrup,$lugReuGrup,$proLugGrup,$fchaFundGrup,$lugNacGrup,$diaReuGrup,$horaReuGrup,$limMiemGrup,$callGrup,$numCasGrup,$colGrup,$municipio_idMunic,$latGrup,$lngGrup,$estado_idEst,$fchaCreaGrup,$usuario_nomUsu, $numGrup); 
	$registro->mod_grupos($reg);
	

	 //var_dump($reg);
  
	header('Location: ../grupos_scout.php ');	 

	 }catch(Exception $e){

	header('Location:  consulta.php');	
//echo "$e";
    //var_dump($e);
	 }
	
	 
?>