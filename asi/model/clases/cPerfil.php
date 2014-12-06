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
					$info[$id]['estado_idEst']  = $rs->fields['estado_idEst'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}
	function seleccionar_grupop($nisMiem)
	{
			$sql = "SELECT * FROM persona as p, miembro as m, grupo as g, municipio as mu, departamento as d where m.nisMiem=? AND p.idPersona=m.persona_idPersona AND m.grupo_idGrup=g.idGrup AND g.municipio_idMunic=mu.idMunic AND mu.departamento_idDep=d.idDep";
  
		$rs = $this->DATA->Execute($sql,$nisMiem);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 		= $rs->fields['idGrup'];
					$info[$id]['idGrup'] 		= $rs->fields['idGrup'];
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
	function seleccionar_estado($nisMiem)
	{
			$sql = "SELECT * FROM persona as p, miembro as m, estado as e where m.nisMiem=? AND p.idPersona=m.persona_idPersona AND e.idEst=m.estado_idEst";
  
		$rs = $this->DATA->Execute($sql,$nisMiem);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 		= $rs->fields['nisMiem'];
					$info[$id]['nisMiem'] 		= $rs->fields['nisMiem'];
					$info[$id]['estado_idEst'] 		= $rs->fields['estado_idEst'];
					$info[$id]['nomEst'] 		= $rs->fields['nomEst'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}
	function seleccionar_estadoI($nisMiem)
	{
			$sql = "SELECT * FROM persona as p, miembro as m, inscripcion as i where m.nisMiem=? AND p.idPersona=i.persona_idPersona";
  
		$rs = $this->DATA->Execute($sql,$nisMiem);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 		= $rs->fields['numSolicInsc'];
					$info[$id]['numSolicInsc'] 		= $rs->fields['numSolicInsc'];
					$info[$id]['estado_idEst'] 		= $rs->fields['estado_idEst'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}
	function seleccionar_cargoc($G)
	{
			$sql = "SELECT * FROM cargo where tipoCargo=? ORDER BY idCargo asc";
  
		$rs = $this->DATA->Execute($sql,$G);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 		= $rs->fields['idCargo'];
					$info[$id]['tipoCargo'] 	= $rs->fields['tipoCargo'];
					$info[$id]['idCargo'] 		= $rs->fields['idCargo'];
					$info[$id]['nomCargo'] 		= $rs->fields['nomCargo'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}
	function seleccionar_cargon($N)
	{
			$sql = "SELECT * FROM cargo where tipoCargo=? ORDER BY idCargo asc";
  
		$rs = $this->DATA->Execute($sql,$N);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 		= $rs->fields['idCargo'];
					$info[$id]['tipoCargo'] 	= $rs->fields['tipoCargo'];
					$info[$id]['idCargo'] 		= $rs->fields['idCargo'];
					$info[$id]['nomCargo'] 		= $rs->fields['nomCargo'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}		
	function seleccionar_estadoR($nisMiem)
	{
			$sql = "SELECT * FROM persona as p, miembro as m, renovacion as r where m.nisMiem=? AND m.nisMiem=r.miembro_nisMiem";
  
		$rs = $this->DATA->Execute($sql,$nisMiem);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 		= $rs->fields['numSolRen'];
					$info[$id]['numSolRen'] 		= $rs->fields['numSolRen'];
					$info[$id]['estado_idEst'] 		= $rs->fields['estado_idEst'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}		
	function seleccionar_grup($nisMiem)
	{
			$sql = "SELECT * FROM miembro where nisMiem=?";
  
		$rs = $this->DATA->Execute($sql,$nisMiem);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 		= $rs->fields['nisMiem'];
					$info[$id]['nisMiem'] 		= $rs->fields['nisMiem'];
					$info[$id]['grupo_idGrup'] 		= $rs->fields['grupo_idGrup'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}	
	function seleccionar_inscripcion($nisMiem)
	{
			$sql = "SELECT * FROM persona as p, miembro as m, inscripcion as i where m.nisMiem=? AND p.idPersona=m.persona_idPersona AND i.persona_idPersona=p.idPersona";
  
		$rs = $this->DATA->Execute($sql,$nisMiem);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 		= $rs->fields['nisMiem'];
					$info[$id]['nisMiem'] 		= $rs->fields['nisMiem'];
					$info[$id]['numSolicInsc'] 		= $rs->fields['numSolicInsc'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}
	function seleccionar_renovacion($nisMiem)
	{
			$sql = "SELECT * FROM persona as p, miembro as m, renovacion as r where m.nisMiem=? AND m.nisMiem=r.miembro_nisMiem";
  
		$rs = $this->DATA->Execute($sql,$nisMiem);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 		= $rs->fields['nisMiem'];
					$info[$id]['nisMiem'] 		= $rs->fields['nisMiem'];
					$info[$id]['numSolRen'] 		= $rs->fields['numSolRen'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}			
}

