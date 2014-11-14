<?php
	class LogUsuario{

		function __construct() {
        global $DATA;
        $this->DATA = $DATA;
    	}

        /*
            Función encargada de crear el log de historial de las veces que el usuario 
            ingresa al sistema
        */
    	function loguearUsuario($datosLog){
            $sql = "INSERT INTO logUsuario (usuario_nomUsu, fchaIngUsu)"
                    ." values(?,?)";
            $save = $this->DATA->Execute($sql, $datosLog);
            $idLog = mysql_insert_id($DATA);
            echo "Ultimo ID: ".$idLog;
            if ($save){
                return true;
            } else {
                return false;
            }
       }

        /*       
            Función que se encarga de actualizar registro de log a la hora de salir del sistema
        */
        function salir($datos){
            try {
                $sql = "UPDATE logUsuario set fchaSalUsu = ? where idLogUsu=?";
                $mod = $this->DATA->Execute($sql, $datos);   
            } catch (Exception $e) {
                $error = "Error en metodo salir: ".$e;
                return $error;
            }
        }

        function obtenerCorrelativo($user){
            try {
                $sql = "SELECT max(idLogUsu) as id from logUsuario where usuario_nomUsu=?";
                $cod = $this->DATA->Execute($sql,$user);

                #echo '<pre>';
                #print_r($cod);
                #die();
                while (!$cod->EOF) {
                    $codigo = $cod->fields['id'];
                    #echo $codigo;
                    $cod->MoveNext();
                }
                return $codigo;
            } catch (Exception $e) {
                $error = "Error en metodo obtenerCorrelativo: ".$e;
                return $error;
            }
        }
    }

?>