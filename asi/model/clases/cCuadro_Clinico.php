<?php
class CuadroClinico
{
	
    //Constructor

   function __construct() 

	{
        global $DATA;
        
        $this->DATA = $DATA;
    }

	function crear_alergia($reg)
    {
    $sql="INSERT INTO alergia (nomAlerg)"
                            . " values (?) ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }

    function crear_padecimiento($reg)
    {
    $sql="INSERT INTO padecimiento (nomPad)"
                            . " values (?) ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }

    function crear_parentesco($reg)
    {
    $sql="INSERT INTO parentesco (nomPar)"
                            . " values (?) ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }

    function crear_estado($reg)
    {
    $sql="INSERT INTO estado (nomEst)"
                            . " values (?) ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }
    function crear_progresion($reg)
    {
    $sql="INSERT INTO tipoProgresion (nomTipProg)"
                            . " values (?) ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }

    function crear_Logro($reg)
    {
    $sql="INSERT INTO logro (nomLogro, idReqLogro)"
                            . " values (?,?) ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }

	function mod_alergia($reg)
    {
    $sql="UPDATE alergia SET nomAlerg=? where idAlerg=? ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }

    function mod_padecimiento($reg)
    {
    $sql="UPDATE padecimiento SET nomPad=? where idPad=? ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }

    function mod_parentesco($reg)
    {
    $sql="UPDATE parentesco SET nomPar=? where idPar=? ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }

    function mod_logro($reg)
    {
    $sql="UPDATE logro SET nomLogro=?, idReqLogro=? where idLogro=? ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }
    function mod_estado($reg)
    {
    $sql="UPDATE estado SET nomEst=? where idEst=? ";
    $save = $this->DATA->Execute($sql, $reg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }

    function seleccionar_alergia()
	{
			$sql = "SELECT * FROM alergia ORDER BY idAlerg desc";
  
		$rs = $this->DATA->Execute($sql);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	= $rs->fields['idAlerg'];
					$info[$id]['idAlerg']	= $rs->fields['idAlerg'];
					$info[$id]['nomAlerg'] 	= $rs->fields['nomAlerg'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}

	function seleccionar_alergia1($id)
	{
			$sql = "SELECT * FROM alergia where idAlerg=?";
  
		$rs = $this->DATA->Execute($sql, $id);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	= $rs->fields['idAlerg'];
					$info[$id]['idAlerg']	= $rs->fields['idAlerg'];
					$info[$id]['nomAlerg'] 	= $rs->fields['nomAlerg'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}

	function seleccionar_padecimiento()
	{
			$sql = "SELECT * FROM padecimiento ORDER BY idPad desc";
  
		$rs = $this->DATA->Execute($sql);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	= $rs->fields['idPad'];
					$info[$id]['idPad']		= $rs->fields['idPad'];
					$info[$id]['nomPad'] 	= $rs->fields['nomPad'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}

	function seleccionar_padecimiento1($id)
	{
			$sql = "SELECT * FROM padecimiento where idPad=?";
  
		$rs = $this->DATA->Execute($sql, $id);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	= $rs->fields['idPad'];
					$info[$id]['idPad']		= $rs->fields['idPad'];
					$info[$id]['nomPad'] 	= $rs->fields['nomPad'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}

		function seleccionar_padecimientos(){
			$result = mysql_query("SELECT * from padecimiento");
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
  	$rows[]=($row);
  }
				return array('rows'=>$rows);
				
		}

function verificar_cuadroclinico($NIS){
			$result = mysql_query("SELECT cu.*,exp.* from cuadroclinico as cu, expediente as exp 
where exp.cuadroClinico_idCuadClin = idCuadClin and miembro_nisMiem like '".$NIS."'");
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
  	$rows[]=($row);
  }
				return array('rows'=>$rows);
				
		}

		function dato_padecimiento($NIS){
			$result = mysql_query("SELECT rp.*,pad.*,exp.miembro_nisMiem from registropad as rp, padecimiento as pad
,cuadroclinico as cu,expediente as exp where pad.idPad = rp.padecimiento_idPad 
and cu.idCuadClin = rp.cuadroClinico_idCuadClin and exp.cuadroClinico_idCuadClin = cu.idCuadClin 
and exp.miembro_nisMiem like '".$NIS."'");
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
  	$rows[]=($row);
  }
				return array('rows'=>$rows);
				
		}

function nuevo_cuadro($NIS,$Sangre){
			$result = mysql_query("SELECT max(idCuadClin) FROM cuadroclinico");
 if ($row = mysql_fetch_row($result)) {
$id = trim($row[0]);
$id =intval($id) + 1;
mysql_query("INSERT INTO cuadroclinico (idCuadClin, tipSangCuadClin ) VALUES ('".$id."','".$Sangre."')");
mysql_query("INSERT INTO expediente(numExp, miembro_nisMiem,cuadroClinico_idCuadClin) VALUES ('".$id."','".$NIS."','".$id."')");
}
				
		}

		function modificar_sangre($NIS,$Sangre){
			$result = mysql_query("SELECT cu.*,exp.* from cuadroclinico as cu, expediente as exp 
where exp.cuadroClinico_idCuadClin = idCuadClin and miembro_nisMiem like '".$NIS."'");
 if ($row = mysql_fetch_row($result)) {
 	$id = trim($row[0]);
 	mysql_query("UPDATE cuadroclinico SET tipSangCuadClin='".$Sangre."' WHERE idCuadClin =".$id);
}		
		}

			function guardar_padecimiento($NIS,$Padecimiento){
			$result = mysql_query("SELECT cu.*,exp.* from cuadroclinico as cu, expediente as exp 
where exp.cuadroClinico_idCuadClin = idCuadClin and miembro_nisMiem like '".$NIS."'");
 if ($row = mysql_fetch_row($result)) {
 	$id = trim($row[0]);
 	mysql_query("INSERT INTO registropad(cuadroClinico_idCuadClin,padecimiento_idPad) VALUES ('".$id."','".$Padecimiento."')");
}		
		}


	function seleccionar_parentesco()
	{
			$sql = "SELECT * FROM parentesco ORDER BY idPar desc";
  
		$rs = $this->DATA->Execute($sql);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	= $rs->fields['idPar'];
					$info[$id]['idPar']		= $rs->fields['idPar'];
					$info[$id]['nomPar'] 	= $rs->fields['nomPar'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}

	function seleccionar_parentesco1($id)
	{
			$sql = "SELECT * FROM parentesco where idPar=?";
  
		$rs = $this->DATA->Execute($sql, $id);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	= $rs->fields['idPar'];
					$info[$id]['idPar']		= $rs->fields['idPar'];
					$info[$id]['nomPar'] 	= $rs->fields['nomPar'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}

		function seleccionar_estado()
	{
			$sql = "SELECT * FROM estado ORDER BY idEst desc";
  
		$rs = $this->DATA->Execute($sql);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	= $rs->fields['idEst'];
					$info[$id]['idEst']		= $rs->fields['idEst'];
					$info[$id]['nomEst'] 	= $rs->fields['nomEst'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}

	function seleccionar_progresion()
	{
			$sql = "SELECT * FROM tipoProgresion ORDER BY idTipProg asc";
  
		$rs = $this->DATA->Execute($sql);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	= $rs->fields['idTipProg'];
					$info[$id]['idTipProg']		= $rs->fields['idTipProg'];
					$info[$id]['nomTipProg'] 	= $rs->fields['nomTipProg'];
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
					$id                 	= $rs->fields['idLogro'];
					$info[$id]['idLogro']		= $rs->fields['idLogro'];
					$info[$id]['nomLogro'] 	= $rs->fields['nomLogro'];
					$info[$id]['idReqLogro'] = $rs->fields['idReqLogro'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}

		function seleccionar_logroMod($Mod)
	{
			$sql = "SELECT * FROM logro where idLogro=?";
  
		$rs = $this->DATA->Execute($sql,$Mod);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	 = $rs->fields['idLogro'];
					$info[$id]['idLogro']	 = $rs->fields['idLogro'];
					$info[$id]['nomLogro'] 	 = $rs->fields['nomLogro'];
					$info[$id]['idReqLogro'] = $rs->fields['idReqLogro'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}
		function seleccionar_logroM()
	{
			$sql = "SELECT l.idLogro,l.nomLogro,l.idReqLogro,r.nomLogro as nomReqLogro from logro as l
left join logro as r on r.idLogro = l.idReqLogro";
  
		$rs = $this->DATA->Execute($sql);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 		= $rs->fields['idLogro'];
					$info[$id]['idLogro']		= $rs->fields['idLogro'];
					$info[$id]['nomLogro'] 		= $rs->fields['nomLogro'];
					$info[$id]['idReqLogro'] 	= $rs->fields['idReqLogro'];
					$info[$id]['nomReqLogro'] 	= $rs->fields['nomReqLogro'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}

	function seleccionar_estado1($id)
	{
			$sql = "SELECT * FROM estado where idEst=?";
  
		$rs = $this->DATA->Execute($sql, $id);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	= $rs->fields['idEst'];
					$info[$id]['idEst']		= $rs->fields['idEst'];
					$info[$id]['nomEst'] 	= $rs->fields['nomEst'];
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