<?php 
class Banco{
function __construct() 

	{
        global $DATA;
        
        $this->DATA = $DATA;
    }
    function crear_banco($reg){
    	$sql="INSERT INTO banco (numCuentaBanc,nomBanc)".
    		  "values(?,?)";
    	$save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }  

    }
    
    



}

