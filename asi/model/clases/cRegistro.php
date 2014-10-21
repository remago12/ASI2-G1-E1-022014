<?php
class Registro
{
	
    //Constructor

    
   function __construct() 

	{
        global $DATA;
        
        $this->DATA = $DATA;
    }

	function crear_registro($parametrosReg)
    {
    $sql="INSERT INTO persona (nomPer,apelPer,fechNacPer,genPer,telPer,celPer,corrPer,duiPer,pasPer,callPer,numCasPer,colPer,municipio_idMunic,fchaCreaPer)"
                            . " values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $save = $this->DATA->Execute($sql, $parametrosReg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }


    function crear_usuario($parametrosReg)
    {
    $sql="INSERT INTO usuario (nomUsu,contraUsu,rol_idRol)"
                            . " values (?,?,?)";
    $save = $this->DATA->Execute($sql, $parametrosReg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }

    function crear_inscripcion($parametrosReg)
    {
    	$rs= mysql_query("SELECT  idPersona FROM scout.persona order by idPersona desc limit 1");
    	if ($row = mysql_fetch_row($rs)) {
$id = trim($row[0]);
$sql="INSERT INTO inscripcion (numSolicInsc,estado_idEst,banco_idBanc,grupo_idGrup,persona_idPersona)"
                            . " values (?,?,?,?,".$id.")";
    $save = $this->DATA->Execute($sql, $parametrosReg); 
          if ($save){
            return true;
        } else {
            return false;
        }

}

    
    }
/*
    function seleccionar_departamento()
			$sql = "SELECT * FROM departamento ORDER BY idDep desc";
  
		$rs = $this->DATA->Execute($sql);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	    = $rs->fields['idDep'];
					$info[$id]['idDep']		= $rs->fields['idDep'];
					$info[$id]['nomDep'] 	= $rs->fields['nomDep'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
		}
*/
		function seleccionar_departamento2(){
			$result = mysql_query("SELECT * FROM scout.departamento order by idDep ASC");
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
  	$rows[]=($row);
  }
				return array('rows'=>$rows);
				
		}

			function seleccionar_municipio2($IdDept){
			$result = mysql_query("select * from municipio where departamento_idDep =".$IdDept); 
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
  	$rows[]=($row);
  }
				return array('rows'=>$rows);
				
		}

			function seleccionar_grupo(){
			$result = mysql_query("SELECT idGrup,numGrup,nomGruo FROM scout.grupo order by numGrup ASC");
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
  	$rows[]=($row);
  }
				return array('rows'=>$rows);
				
		}

		function seleccionar_grupo2($IdGrupo){
			$result = mysql_query("SELECT latGrup,lngGrup FROM scout.grupo where idGrup =".$IdGrupo);
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
  	$rows[]=($row);
  }
				return array('rows'=>$rows);
				
		}

		function seleccionar_corrnis(){
			$result = mysql_query("SELECT (idPersona+1) FROM scout.persona order by idPersona desc limit 1");
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
  	$rows[]=($row);
  }
				return array('rows'=>$rows);
				
		}
		/*

function seleccionar_municipio()
	{
		
			$sql = "SELECT * FROM municipio where departamento_idDep= ".$_POST['idDep'];
		$rs = $this->DATA->Execute($sql);
				if ( $rs->RecordCount()) {
				while(!$rs->EOF){
					$id                 	    = $rs->fields['idMunic'];
					$info[$id]['idMunic']		= $rs->fields['idMunic'];
					$info[$id]['nomMunic'] 		= $rs->fields['nomMunic'];
		  		    $rs->MoveNext();
				}
				$rs->Close();
				return $info;
			} else {
				return false;
			}
			}

			    
function seleccionar_grupos()
{
	$sql= "SELECT g.*, m.nomMunic, d.nomDep FROM municipio AS m, departamento AS d , grupo AS g
  WHERE m.departamento_idDep = d.idDep and g.municipio_idMunic=m.idMunic;" ;
	$rs= $this-> DATA->Execute($sql);
	if($rs->RecordCount()){
		while(!$rs->EOF){
			$id= $rs-> fields['numGrup'];
			$info[$id]['numGrup']=$rs-> fields['numGrup'];
			$info[$id]['nomGruo']=$rs-> fields['nomGruo'];
			$info[$id]['lugReuGrup']=$rs-> fields['lugReuGrup'];
			$info[$id]['diaReuGrup']=$rs->fields['diaReuGrup'];
			$info[$id]['horaReuGrup']= $rs->fields['horaReuGrup'];
			$info[$id]['nomDep']= $rs->fields['nomDep'];
			$info[$id]['nomMunic']= $rs->fields['nomMunic'];
			//$info[$id]['municipio_idMunic']=$rs->fields['municipio_idMunic'];
			$rs->MoveNext();
			}
			$rs->Close();
			return $info;
	}
	else{
		return false;
		}
		}

*/
     
} 


?>