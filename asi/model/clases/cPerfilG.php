<?php 
class PerfilGrup
{
	
	function __construct()
	{
		global $DATA;
		$this->DATA = $DATA;
	}
    function seleccionar_datos($idG)
	{
			$sql = "SELECT * FROM grupo as g, municipio as mu, departamento as d where g.idGrup=? AND g.municipio_idMunic=mu.idMunic AND mu.departamento_idDep=d.idDep";
  
		$rs = $this->DATA->Execute($sql,$idG);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 		= $rs->fields['idGrup'];
					$info[$id]['idGrup']		= $rs->fields['idGrup'];
					$info[$id]['numGrup'] 		= $rs->fields['numGrup'];
					$info[$id]['nomGruo'] 		= $rs->fields['nomGruo'];
					$info[$id]['exclGrup'] 		= $rs->fields['exclGrup'];
					$info[$id]['lugReuGrup'] 	= $rs->fields['lugReuGrup'];
					$info[$id]['proLugGrup'] 	= $rs->fields['proLugGrup'];
					$info[$id]['fchaFundGrup'] 	= $rs->fields['fchaFundGrup'];
					$info[$id]['lugNacGrup'] 	= $rs->fields['lugNacGrup'];
					$info[$id]['diaReuGrup'] 	= $rs->fields['diaReuGrup'];
					$info[$id]['horaReuGrup'] 	= $rs->fields['horaReuGrup'];
					$info[$id]['limMiemGrup'] 	= $rs->fields['limMiemGrup'];
					$info[$id]['callGrup'] 		= $rs->fields['callGrup'];
					$info[$id]['numCasGrup'] 	= $rs->fields['numCasGrup'];
					$info[$id]['colGrup'] 		= $rs->fields['colGrup'];
					$info[$id]['latGrup'] 		= $rs->fields['latGrup'];
					$info[$id]['lngGrup'] 		= $rs->fields['lngGrup'];
					$info[$id]['estado_idEst'] 	= $rs->fields['estado_idEst'];
					$info[$id]['fchaCreaGrup'] 	= $rs->fields['fchaCreaGrup'];
					$info[$id]['telgrup'] 		= $rs->fields['telgrup'];
					$info[$id]['nomMunic'] 		= $rs->fields['nomMunic'];
					$info[$id]['nomDep'] 		= $rs->fields['nomDep'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}		
}

