<?php 
class Expedientes
{
	
	function __construct()
	{
		global $DATA;
		$this->DATA = $DATA;
	}
	function crear_miembroCargo($parametrosReg)
    {

    $sql="INSERT INTO miembroCargo (miembro_nisMiem,cargo_idCargo,fechaCrea,usuCrea)"
                            . " values (?,?,?,?)";
    $save = $this->DATA->Execute($sql, $parametrosReg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }
    function seleccionar_cargoeg($nis)
    {
            $sql = "SELECT * FROM miembroCargo as mc, cargo as c WHERE mc.cargo_idCargo=c.idCargo AND c.tipoCargo='G'AND mc.miembro_nisMiem=? ORDER BY fechaCrea desc";
  
        $rs = $this->DATA->Execute($sql,$nis);
                if ( $rs->RecordCount()) {
                while(!$rs->EOF){
                    $id                         = $rs->fields['miembro_nisMiem'];
                    $info[$id]['cargo_idCargo'] = $rs->fields['cargo_idCargo'];
                    $info[$id]['fechaCrea']     = $rs->fields['fechaCrea'];
                    $info[$id]['usuCrea']       = $rs->fields['usuCrea'];
                    $info[$id]['nomCargo']       = $rs->fields['nomCargo'];
                    $rs->MoveNext();
                }
                $rs->Close();
                return $info;
            } else {
                return false;
            }
        }
    function seleccionar_cargoen($nis)
    {
            $sql = "SELECT * FROM miembroCargo as mc, cargo as c WHERE mc.cargo_idCargo=c.idCargo AND c.tipoCargo='N' AND mc.miembro_nisMiem=? ORDER BY fechaCrea desc";
  
        $rs = $this->DATA->Execute($sql,$nis);
                if ( $rs->RecordCount()) {
                while(!$rs->EOF){
                    $id                         = $rs->fields['miembro_nisMiem'];
                    $info[$id]['cargo_idCargo'] = $rs->fields['cargo_idCargo'];
                    $info[$id]['fechaCrea']     = $rs->fields['fechaCrea'];
                    $info[$id]['usuCrea']       = $rs->fields['usuCrea'];
                    $info[$id]['nomCargo']       = $rs->fields['nomCargo'];
                    $rs->MoveNext();
                }
                $rs->Close();
                return $info;
            } else {
                return false;
            }
        }
    function seleccionar_logro()
    {
            $sql = "SELECT * FROM logro ORDER BY idLogro asc";
  
        $rs = $this->DATA->Execute($sql);
                if ( $rs->RecordCount()) {
                while(!$rs->EOF){
                    $id                     = $rs->fields['idLogro'];
                    $info[$id]['idLogro']       = $rs->fields['idLogro'];
                    $info[$id]['nomLogro']  = $rs->fields['nomLogro'];
                    $info[$id]['idReqLogro'] = $rs->fields['idReqLogro'];
                    $rs->MoveNext();
                }
                $rs->Close();
                return $info;
            } else {
                return false;
            }
        }        
}
?>