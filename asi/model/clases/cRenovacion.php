<?php 
class Renovacion
{
	
	function __construct()
	{
		global $DATA;
		$this->DATA = $DATA;
	}
	function crear_renovacion($renovacion){
		
		$sql="INSERT INTO renovacion(numSolRen,fchaRen,estado_idEst,exeRen,numFactRen,fchaPagRen,montoRen,banco_idBanc,miembro_nisMiem,grupo_idGrup,imgcomprobante)"
		."values(?,?,?,?,?,?,?,?,?,?,?)";
		$save = $this->DATA->Execute($sql, $renovacion);
		if($save){
			return true;
		}else{
			return false;
		}
	}
}
?>