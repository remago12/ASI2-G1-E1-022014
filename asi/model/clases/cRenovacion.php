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