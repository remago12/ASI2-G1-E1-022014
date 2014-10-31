<?php 
class Perfil
{
	
	function __construct()
	{
		global $DATA;
		$this->DATA = $DATA;
	}
	function crear_banco($banco){
		$sql="INSERT INTO banco(numCuentaBanc,nomBanc)"."values(?,?)";
		$save = $this->DATA->Execute($sql, $banco);
		if($save){
			return true;
		}else{
			return false;
		}
	}
    function seleccionar_datos($nisMiem)
	{
			$sql = "SELECT * FROM persona as p, miembro as m, grupo as g, municipio as mu, departamento as d where m.nisMiem=? AND p.idPersona=m.persona_idPersona AND m.grupo_idGrup=g.idGrup AND p.municipio_idMunic=mu.idMunic AND mu.departamento_idDep=d.idDep";
  
		$rs = $this->DATA->Execute($sql,$nisMiem);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 		= $rs->fields['idPersona'];
					$info[$id]['idPersona']		= $rs->fields['idPersona'];
					$info[$id]['nomPer'] 		= $rs->fields['nomPer'];
					$info[$id]['apelPer'] 		= $rs->fields['apelPer'];
					$info[$id]['genPer'] 		= $rs->fields['genPer'];
					$info[$id]['fechNacPer'] 	= $rs->fields['fechNacPer'];
					$info[$id]['telPer'] 		= $rs->fields['telPer'];
					$info[$id]['celPer'] 		= $rs->fields['celPer'];
					$info[$id]['corrPer'] 		= $rs->fields['corrPer'];
					$info[$id]['fotPer'] 		= $rs->fields['fotPer'];
					$info[$id]['callPer'] 		= $rs->fields['callPer'];
					$info[$id]['numCasPer'] 	= $rs->fields['numCasPer'];
					$info[$id]['colPer'] 		= $rs->fields['colPer'];
					$info[$id]['municipio_idMunic'] 	= $rs->fields['municipio_idMunic'];
					$info[$id]['nisMiem'] 		= $rs->fields['nisMiem'];
					$info[$id]['polizaSegMiem'] = $rs->fields['polizaSegMiem'];
					$info[$id]['certMiem'] 		= $rs->fields['certMiem'];
					$info[$id]['numGrup'] 		= $rs->fields['numGrup'];
					$info[$id]['nomGruo'] 		= $rs->fields['nomGruo'];
					$info[$id]['lugReuGrup'] 	= $rs->fields['lugReuGrup'];
					$info[$id]['diaReuGrup'] 	= $rs->fields['diaReuGrup'];
					$info[$id]['horaReuGrup'] 	= $rs->fields['horaReuGrup'];
					$info[$id]['callGrup'] 		= $rs->fields['callGrup'];
					$info[$id]['numCasGrup'] 	= $rs->fields['numCasGrup'];
					$info[$id]['colGrup'] 		= $rs->fields['colGrup'];
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

