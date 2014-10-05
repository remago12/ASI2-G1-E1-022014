<?php

class Usuario{

    //Constructor
   function __construct(){
        global $DATA;
        $this->DATA = $DATA;
    }

	function ingreso($paramsUsuario){
		$sql = "SELECT * FROM usuario as u "
		. "where u.nomUsu = ? AND u.contraUsu = ?";
		$rs = $this->DATA->Execute($sql, $paramsUsuario);

        if ( $rs->RecordCount() > 0 ) {
			session_start();
			$usuario            	 = $rs->fields['nomUsu'];
			$contra             	 = $rs->fields['contraUsu'];
			//$imagen                = $rs->fields['Usu_Imagen'];
			//$idAdministrador	     = $rs->fields['IdEmpleado'];
			//$correo				 = $re->fields['Usu_Correo'];
			$_SESSION['usuario']     = $usuario;
			$_SESSION['contra']      = $contra;
			//$_SESSION['imagen']    = $imagen;
			//$_SESSION['correo']	 = $correo;
 			$_SESSION['stat']  		 = "identificado"; 
			$_SESSION['tipoAdmin']   = "admin"; 
            return true;
        }else{
            return false;
        }
    }

    function verSession(){
		if (isset($_SESSION['stat'])){
			$estado = $_SESSION['stat'];
			$tipo = $_SESSION['tipoAdmin'];

            if ($estado == "identificado" AND $tipo=="admin"){
            	return true;
            }else{
                return false;
            }

        }else{

            return false;
        }
    }
	

	function ver_usuario($usuario){
		$sql = "SELECT * FROM usuario "
		. "WHERE nomUsu like ?";

		$rs = $this->DATA->Execute($sql, $usuario);

		if ( $rs->RecordCount()){

			while(!$rs->EOF){
				$id                 	  = $rs->fields['nomUsu'];
				$info[$id]['nomUsu']      = $rs->fields['nomUsu'];
				$info[$id]['contraUsu']   = $rs->fields['contraUsu'];
				$rs->MoveNext();
			}

			return true;
			$rs->Close();

			} else {
				return false;
			}
    }


    function ingresoUsuario(){
    	if ( (isset($_POST['username_id'])) && (isset($_POST['password'])) )  {
		    $user = $_POST['username_id'];
		    $psw  = $_POST['password'];
		    //$estado= "Habilitado";
		    //$tipo  = "Administrador";
		    //$mPas =   md5($psw);
		    $paramsUser = array($user, $psw);
		    $login = $this->ingreso($paramsUser);
		 
		    if ($login){
		      header("Location: inscripcion_m.php");
		      $estadoLogin="Usuario o Contraseña incorrectos";
		    }else {
		      header("Location: login.php");
		    }

		}
    }
} 

?>