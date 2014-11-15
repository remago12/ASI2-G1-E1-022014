<?php 
class Renovacion
{
	
	function __construct()
	{
		global $DATA;
		$this->DATA = $DATA;
	}
	function actualizar_estadoMiem($reg)
    {
    $sql="UPDATE miembro SET estado_idEst=? where nisMiem=? ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }
    function actualizar_inscripcion($reg)
    {
    $sql="UPDATE inscripcion SET estado_idEst=? where numSolicInsc=? ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }
    function actualizar_renovacion($reg)
    {
    $sql="UPDATE renovacion SET estado_idEst=?, numFactRen=?, fchaPagRen=?, montoRen=?, banco_idBanc=?, imgRen=?  where miembro_nisMiem=? ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }
    function seleccionar_renovacion($nisMiem)
	{
			$sql = "SELECT r.numSolRen,r.imgRen,mi.nisMiem,e.nomEst, g.numGrup,p.*,d.nomDep,m.nomMunic from renovacion as r, miembro as mi, grupo as g, estado as e, departamento as d, municipio as m, persona as p where mi.nisMiem = r.miembro_nisMiem and mi.grupo_idGrup = g.idGrup and r.estado_idEst = e.idEst and mi.persona_idPersona = p.idPersona and p.municipio_idMunic=m.idMunic and m.departamento_idDep=d.idDep and r.numSolRen=?";
  
		$rs = $this->DATA->Execute($sql,$nisMiem);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 		= $rs->fields['numSolRen'];
					$info[$id]['numSolRen'] 	= $rs->fields['numSolRen'];
					$info[$id]['nomEst'] 		= $rs->fields['nomEst'];
					$info[$id]['numGrup'] 		= $rs->fields['numGrup'];
					$info[$id]['idPersona'] 	= $rs->fields['idPersona'];
					$info[$id]['nomPer'] 	= $rs->fields['nomPer'];
					$info[$id]['apelPer'] 	= $rs->fields['apelPer'];
					$info[$id]['genPer'] 		= $rs->fields['genPer'];
					$info[$id]['fechNacPer'] 	= $rs->fields['fechNacPer'];
					$info[$id]['telPer'] 		= $rs->fields['telPer'];
					$info[$id]['celPer'] 	= $rs->fields['celPer'];
					$info[$id]['corrPer'] 	= $rs->fields['corrPer'];
					$info[$id]['duiPer'] 		= $rs->fields['duiPer'];
					$info[$id]['pasPer'] 		= $rs->fields['pasPer'];
					$info[$id]['callPer'] 		= $rs->fields['callPer'];
					$info[$id]['numCasPer'] 		= $rs->fields['numCasPer'];
					$info[$id]['colPer'] 		= $rs->fields['colPer'];
					$info[$id]['fchaCreaPer'] 		= $rs->fields['fchaCreaPer'];
					$info[$id]['nomDep'] 		= $rs->fields['nomDep'];
					$info[$id]['nomMunic'] 		= $rs->fields['nomMunic'];
					$info[$id]['imgRen'] 		= $rs->fields['imgRen'];
					$info[$id]['nisMiem'] 		= $rs->fields['nisMiem'];

		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}
	function crear_renovacion($renovacion,$idPer){
		$rs= mysql_query("SELECT  idPersona FROM scout.persona where idPersona='".$idPer."'");
    	$year= date("y");
    	$rs2= mysql_query("SELECT numSolRen from renovacion where numSolRen like '%____".$year."%' order by numSolRen desc limit 1");
      	if ($row = mysql_fetch_row($rs)) {
$id = trim($row[0]);
if ($row2 = mysql_fetch_row($rs2)){
	$correlativo = trim($row2[0]);
	$correlativo=substr($correlativo,0,-2);
	$correlativo= (int)$correlativo + 1;
$num_insc="";

	if (strlen((string)$correlativo) == 1){
	$num_insc="00000".$correlativo.$year;
}
elseif (strlen((string)$correlativo) == 2){
	$num_insc="0000".$correlativo.$year;
}
elseif (strlen((string)$correlativo) == 3){
$num_insc="000".$correlativo.$year;

}
elseif (strlen((string)$correlativo) == 4){
	$num_insc="00".$correlativo.$year;
}
elseif (strlen((string)$correlativo) == 5){
	$num_insc="0".$correlativo.$year;
}
elseif (strlen((string)$correlativo) == 6){
	$num_insc=$correlativo.$year;
}
		
	}if ($num_insc ==""){
		$num_insc="000001".$year;
	}

	$sql="INSERT INTO renovacion(numSolRen,fchaRen,estado_idEst,exeRen,miembro_nisMiem,grupo_idGrup)"
		."values('".$num_insc."',?,?,?,?,?)";
		$save = $this->DATA->Execute($sql, $renovacion);
		if($save){
			return true;
		}else{
			return false;
		}
 }
}
}
?>