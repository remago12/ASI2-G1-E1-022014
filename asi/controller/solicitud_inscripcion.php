<?php
   require_once '../views/admin/solicitud_miembro.tpl.php';
   //require_once '../model/clases/cInscripcion.php';
   //require_once '../model/data/dataBase.php';
     //Objetos
     $oInscripcion   = new Inscripcion();
     $idI = base64_decode($_GET['numSolicInsc']);

      try{
      $inscripcion = $oInscripcion->seleccionar_inscripcion($idI);
      }catch(Exception $e){
        echo "Ha ocurrido un error";
      }
      if($inscripcion!=null)
        {
        foreach($inscripcion AS $key => $bl)
        {
    

        $nomPer      = $bl['nomPer'];
        $apelPer       = $bl['apelPer'];
        $genPer       = $bl['genPer'];
          if ($bl['genPer'] == "M"){
        	$genPer= "Masculino";
        }else{
        	$genPer= "Femenino";
        }
         $fechNacPer =$bl['fechNacPer'];
        $fecha = time() - strtotime($fechNacPer);
$edadPer = floor((($fecha / 3600) / 24) / 360);
$numGrup =$bl['numGrup'];
$idEst =$bl['idEst'];
$nomEst =$bl['nomEst'];
        ?>
        <?php
        
        }
        }else{
         echo "No hay datos";
        }
?>


