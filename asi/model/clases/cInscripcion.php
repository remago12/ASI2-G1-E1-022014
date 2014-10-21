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

}

?>