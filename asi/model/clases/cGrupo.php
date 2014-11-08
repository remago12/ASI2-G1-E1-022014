<?php
	class Grupo{


		function __construct() {
        global $DATA;
        $this->DATA = $DATA;
    	}

    	function crearGrupo($paramsGrupo){	


    		$sql="INSERT INTO grupo(numGrup, nomGruo, exclGrup, lugReuGrup, proLugGrup, fchaFundGrup, lugNacGrup, diaReuGrup, horaReuGrup, limMiemGrup, callGrup, numCasGrup, colGrup, municipio_idMunic, latGrup, lngGrup, estado_idEst, usuario_nomUsu, telGrup)"
    			." values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    		$save = $this->DATA->Execute($sql, $paramsGrupo); 
          	if ($save){
            	return true;
        	} else {
            	return false;
        	}
    	}

function seleccionar_grupo($IdGrupo)
{
 $sql= "SELECT * from grupo where idGrup =".$IdGrupo;
  $rs= $this-> DATA->Execute($sql);
  if($rs->RecordCount()){
    while(!$rs->EOF){
      $id= $rs->fields['idGrup'];
      $info[$id]['idGrup']=$rs->fields['idGrup'];
      $info[$id]['numGrup']=$rs->fields['numGrup'];
      $info[$id]['nomGruo']=$rs->fields['nomGruo'];
      $info[$id]['exclGrup']=$rs->fields['exclGrup'];
      $info[$id]['lugReuGrup']=$rs->fields['lugReuGrup'];
      $info[$id]['proLugGrup']=$rs->fields['proLugGrup'];
      $info[$id]['fchaFundGrup']=$rs->fields['fchaFundGrup'];
      $info[$id]['idEst']=$rs->fields['idEst'];
      $info[$id]['nomEst']=$rs->fields['nomEst'];
      //$info[$id]['municipio_idMunic']=$rs->fields['municipio_idMunic'];
      $rs->MoveNext();
      }
      $rs->Close();
      return $info;
  }
  else{
    return false;
    }
  
  }  

	}
