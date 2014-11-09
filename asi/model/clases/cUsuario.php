<?php
class Usuario 
{
    //Constructor
   function __construct() 
	{
        global $DATA;
        $this->DATA = $DATA;
    }
	function ingreso($paramsUsuario)
	{
			$sql = "SELECT * FROM usuario as u "
			. "where u.nomUsu = ? AND u.contraUsu = ?";
			$rs = $this->DATA->Execute($sql, $paramsUsuario);
        if ( $rs->RecordCount() > 0 ) {
				session_start();
			$usuario              		= $rs->fields['nomUsu'];
			$rol 						= $rs->fields['rol_idRol'];
			$_SESSION['usuario']       	= $usuario;
			$_SESSION['rol']			= $rol;
 			$_SESSION['stat']  		   	= "identificado"; 
			$_SESSION['tipoAdmin']     	= "admin"; 

            return true;
        } else {
            return false;
        }
    }
    function verSession()
    {
		
			if (isset($_SESSION['stat'])) {
				$estado = $_SESSION['stat'];
				$tipo = $_SESSION['rol'];
           if ($estado == "identificado") {
					if ($tipo=="1"){
						return true;
					}elseif ($tipo=="2") {
						return true;
					}elseif ($tipo=="3") {
						return true;
					}
		
			else{
			return false;
			}
            } else {
                return false;
            }
        } else {
           return false;
        }
    }
function ver_usuario($usuario)
	{
			$sql = "SELECT * FROM usuario "
			. "WHERE nomUsu like ?";
  
		$rs = $this->DATA->Execute($sql, $usuario);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	    = $rs->fields['nomUsu'];
					$info[$id]['nomUsu']     = $rs->fields['nomUsu'];
					$info[$id]['contraUsu']   = $rs->fields['contraUsu'];
					$rs->MoveNext();
				}
				return true;
				$rs->Close();		
			} else {
				return false;
			}
    }
   } 
?>