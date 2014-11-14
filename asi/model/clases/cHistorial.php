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

    $sql="INSERT INTO cambioEstado (estado_idEst,obserCamEst,usuario_nomUsu,miembro_nisMiem,grupo_idGrup,inscripcion_numSolicInsc)"
                            . " values (?,?,?,?,?,?)";
    $save = $this->DATA->Execute($sql, $parametrosReg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }
    function crear_historialSR($parametrosReg)
    {

    $sql="INSERT INTO cambioEstado (estado_idEst,obserCamEst,usuario_nomUsu,miembro_nisMiem,grupo_idGrup)"
                            . " values (?,?,?,?,?)";
    $save = $this->DATA->Execute($sql, $parametrosReg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }
    function crear_historialR($parametrosReg)
    {

    $sql="INSERT INTO cambioEstado (estado_idEst,obserCamEst,usuario_nomUsu,miembro_nisMiem,grupo_idGrup,renovacion_numSolRen)"
                            . " values (?,?,?,?,?,?)";
    $save = $this->DATA->Execute($sql, $parametrosReg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }
}
?>