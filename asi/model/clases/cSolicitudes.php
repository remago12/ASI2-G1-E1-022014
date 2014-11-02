<?php
class Solicitud
{
	 function __construct() 
{
        global $DATA;
        
        $this->DATA = $DATA;
    }
 function seleccionar_inscripciones($IdGrup,$IdDep){
			$result = mysql_query("SELECT p.nomPer,p.apelPer,p.genPer,m.departamento_idDep ,p.municipio_idMunic, i.* from persona as p, inscripcion as i, municipio as m where p.idPersona = i.persona_idPersona and p.municipio_idMunic = m.idMunic and p.nomPer like '%' and p.apelPer like '%' and m.departamento_idDep like '".$IdDep."' and p.municipio_idMunic like '%' and i.grupo_idGrup like '".$IdGrup."' and i.estado_idEst like '%'");
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
  	$rows[]=($row);
  }
				return array('rows'=>$rows);
				
		}




    }

?>