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
 $sql= "SELECT g.*, d.nomDep , m.nomMunic FROM grupo as g, departamento as d, municipio as m where g.municipio_idMunic= m.idMunic and m.departamento_idDep = d.idDep and g.idGrup =".$IdGrupo;
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
      $info[$id]['telgrup']=$rs->fields['telgrup'];
      $info[$id]['nomDep']=$rs->fields['nomDep'];
      $info[$id]['nomMunic']=$rs->fields['nomMunic'];
       $info[$id]['callGrup']=$rs->fields['callGrup'];
        $info[$id]['numCasGrup']=$rs->fields['numCasGrup'];
        $info[$id]['colGrup']=$rs->fields['colGrup'];
        $info[$id]['latGrup']=$rs->fields['latGrup'];
        $info[$id]['lngGrup']=$rs->fields['lngGrup'];


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
