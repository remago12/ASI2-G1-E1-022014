<?php
class Miembros
{
	 function __construct() 
{
        global $DATA;
        
        $this->DATA = $DATA;
    }
 function seleccionar_miembros($NIS,$IdDep,$IdMun,$IdGrup,$Gen,$nombre,$apellido){
			$result = mysql_query("SELECT mi.nisMiem,g.numGrup,p.nomper,p.apelPer,p.genper,p.fechNacPer,d.nomDep,m.nomMunic,e.nomEst FROM miembro as mi, persona as p, grupo as g,departamento as d, municipio as m, estado as e where mi.persona_idPersona = p.idPersona and g.idGrup = mi.grupo_idGrup and p.municipio_idMunic=m.idMunic and m.departamento_idDep=d.idDep and mi.estado_idEst=e.idEst and mi.nisMiem like '".$NIS."' and g.idGrup like'".$IdGrup."' and p.nomPer like '".$nombre."' and p.apelPer like '".$apellido."' and p.genPer like '".$Gen."' and d.idDep like '".$IdDep."' and m.idMunic like '".$IdMun."' and e.idEst like '%'");
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
  	$rows[]=($row);
  }
				return array('rows'=>$rows);
				
		}

    function contar_miembros($NIS,$IdDep,$IdMun,$IdGrup,$Gen,$nombre,$apellido){
    $result = mysql_query("SELECT count(mi.nisMiem) FROM miembro as mi, persona as p, grupo as g,departamento as d, municipio as m, estado as e where mi.persona_idPersona = p.idPersona and g.idGrup = mi.grupo_idGrup and p.municipio_idMunic=m.idMunic and m.departamento_idDep=d.idDep and mi.estado_idEst=e.idEst and mi.nisMiem like '".$NIS."' and g.idGrup like'".$IdGrup."' and p.nomPer like '".$nombre."' and p.apelPer like '".$apellido."' and p.genPer like '".$Gen."' and d.idDep like '".$IdDep."' and m.idMunic like '".$IdMun."' and e.idEst like '%'");
    $rows=array();
    while($row=mysql_fetch_array($result,MYSQL_BOTH))
    {
      $rows[]=($row);
    }
    return array('rows'=>$rows);

    }
  }

?>