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

     function crear_miembro($parametrosReg,$idnumSolicInsc)
    {
 $rs= mysql_query("SELECT persona_idPersona,grupo_idGrup from inscripcion where numSolicInsc = 0000114");
 $idPer="";
 $idGrup="";
 if ($row = mysql_fetch_row($rs)) {
 	$idPer=$row[0];
 	$idGrup=$row[1];
    $sql="INSERT INTO miembro(nisMiem,estado_idEst, usuario_nomUsu,persona_idPersona, grupo_idGrup)"
                            . " values (?,?,?,".$idPer.",".$idGrup.")";
    $save = $this->DATA->Execute($sql,$parametrosReg); 
          if ($save){
            return true;
        } else {
            return false;
        }
    }
}
    function crear_inscripcion($parametrosReg){

    	$rs= mysql_query("SELECT  idPersona FROM scout.persona order by idPersona desc limit 1");
    	$year= date("y");
    	$rs2= mysql_query("SELECT numSolicInsc from inscripcion where numSolicInsc like '%____".$year."%' order by numSolicInsc desc limit 1 ");
      	if ($row = mysql_fetch_row($rs)) {
$id = trim($row[0]);
if ($row2 = mysql_fetch_row($rs2)){
	$correlativo = trim($row2[0]);
	$correlativo=substr($correlativo,0,-2);
	$correlativo= (int)$correlativo + 1;
$num_insc="";

	if (strlen((string)$correlativo) == 1){
	$num_insc="00000".$correlativo.$year;
}
elseif (strlen((string)$correlativo) == 2){
	$num_insc="0000".$correlativo.$year;
}
elseif (strlen((string)$correlativo) == 3){
$num_insc="000".$correlativo.$year;

}
elseif (strlen((string)$correlativo) == 4){
	$num_insc="00".$correlativo.$year;
}
elseif (strlen((string)$correlativo) == 5){
	$num_insc="0".$correlativo.$year;
}
elseif (strlen((string)$correlativo) == 6){
	$num_insc=$correlativo.$year;
}

$sql="INSERT INTO inscripcion (estado_idEst,banco_idBanc,grupo_idGrup,numSolicInsc,persona_idPersona)"
                       . " values (?,?,?,'".$num_insc."',".$id.")";
    $save = $this->DATA->Execute($sql,$parametrosReg); 
          if ($save){
            return true;
            echo $year;
        } else {
            return false;
       }

}

    
    }
}

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
			$result = mysql_query("SELECT nisMiem from scout.miembro");
			if(mysql_num_rows($result) == null){
			
			}
			else{
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
  	$rows[]=($row);
  } 
				return array('rows'=>$rows);
				
		}
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