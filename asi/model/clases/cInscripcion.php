<?php
class Inscripcion
{
	 function __construct() 

	{
        global $DATA;
        
        $this->DATA = $DATA;
    }

    function seleccionar_persona($idPersona){
			$result = mysql_query("SELECT * FROM scout.persona where idPersona = ".$idPersona);
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
  	$rows[]=($row);
  }
				return array('rows'=>$rows);
				
		}

     function seleccionar_inscripcion($idPersona){
      $result = mysql_query("SELECT i.*, g.numGrup FROM inscripcion AS i, grupo AS g WHERE g.idGrup = i.grupo_idGrup and i.persona_idPersona =".$idPersona);
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
    $rows[]=($row);
  }
        return array('rows'=>$rows);
        
    }

    function seleccionar_inscripciones()
{
 $sql= "SELECT p.*,i.*, g.numGrup FROM persona AS p , inscripcion AS i, grupo AS g WHERE g.idGrup = i.grupo_idGrup" ;
  $rs= $this-> DATA->Execute($sql);
  if($rs->RecordCount()){
    while(!$rs->EOF){
      $id= $rs->fields['numSolicInsc'];
      $info[$id]['numSolicInsc']=$rs->fields['numSolicInsc'];
      $info[$id]['nomPer']=$rs->fields['nomPer'];
      $info[$id]['apelPer']=$rs->fields['apelPer'];
      $info[$id]['genPer']=$rs->fields['genPer'];
      $info[$id]['persona_idPersona']=$rs->fields['persona_idPersona'];
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
    


}

?>