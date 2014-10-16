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
}

