<?php 
class Historial
{
	
	function __construct()
	{
		global $DATA;
		$this->DATA = $DATA;
	}
	function crear_historial($parametrosReg)
    {

    $sql="INSERT INTO cambioEstado (estado,obserCamEst,usuario_nomUsu,miembro_nisMiem,grupo_idGrup,inscripcion_numSolicInsc,renovacion_numSolRen)"
                            . " values (?,?,?,?,?,?,?)";
    $save = $this->DATA->Execute($sql, $parametrosReg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }
}
?>