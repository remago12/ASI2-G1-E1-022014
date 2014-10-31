<?php 
class Banco
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
	function mod_banco($reg)
    {
    $sql="UPDATE banco SET numCuentaBanc=?, nomBanc=? where idBanc=? ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }
    function seleccionar_banco()
	{
			$sql = "SELECT * FROM banco ORDER BY idBanc desc";
  
		$rs = $this->DATA->Execute($sql);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	= $rs->fields['idBanc'];
					$info[$id]['idBanc']	= $rs->fields['idBanc'];
					$info[$id]['nomBanc'] 	= $rs->fields['nomBanc'];
					$info[$id]['numCuentaBanc'] 	= $rs->fields['numCuentaBanc'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}

	function seleccionar_banco1($id)
	{
			$sql = "SELECT * FROM banco where idBanc=?";
  
		$rs = $this->DATA->Execute($sql, $id);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$$id                 	= $rs->fields['idBanc'];
					$info[$id]['idBanc']	= $rs->fields['idBanc'];
					$info[$id]['nomBanc'] 	= $rs->fields['nomBanc'];
					$info[$id]['numCuentaBanc'] 	= $rs->fields['numCuentaBanc'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}
}

