<?php
class Miembros
{
	 function __construct() 
{
        global $DATA;
        
        $this->DATA = $DATA;
    }
 function seleccionar_miembros($NIS){
			$result = mysql_query("SELECT mi.nisMiem,g.numGrup,p.nomper,p.apelPer,p.genper,p.fechNacPer,d.nomDep,m.nomMunic,e.nomEst FROM miembro as mi, persona as p, grupo as g,departamento as d, municipio as m, estado as e where mi.persona_idPersona = p.idPersona and g.idGrup = mi.grupo_idGrup and p.municipio_idMunic=m.idMunic and m.departamento_idDep=d.idDep and mi.estado_idEst=e.idEst and mi.nisMiem like '".$NIS."' and g.numGrup like'%' and p.nomPer like '%' and p.apelPer like '%' and p.genPer like '%' and d.idDep like '%' and m.idMunic like '%' and e.idEst like '%'");
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
  	$rows[]=($row);
  }
				return array('rows'=>$rows);
				
		}

    function contar_miembros($NIS){
    $result = mysql_query("SELECT count(mi.nisMiem) FROM miembro as mi, persona as p, grupo as g,departamento as d, municipio as m, estado as e where mi.persona_idPersona = p.idPersona and g.idGrup = mi.grupo_idGrup and p.municipio_idMunic=m.idMunic and m.departamento_idDep=d.idDep and mi.estado_idEst=e.idEst and mi.nisMiem like '".$NIS."' and g.numGrup like'%' and p.nomPer like '%' and p.apelPer like '%' and p.genPer like '%' and d.idDep like '%' and m.idMunic like '%' and e.idEst like '%'");
    $rows=array();
    while($row=mysql_fetch_array($result,MYSQL_BOTH))
    {
      $rows[]=($row);
    }
    return array('rows'=>$rows);

    }
  }

?>