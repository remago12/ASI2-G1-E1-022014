<?php
class Solicitud
{
	 function __construct() 
{
        global $DATA;
        
        $this->DATA = $DATA;
    }
 function seleccionar_inscripciones($IdGrup,$IdDep,$IdMun,$IdEst){
			$result = mysql_query("SELECT p.nomPer,p.apelPer,p.genPer,p.fechNacPer,d.nomDep ,m.nomMunic , i.numSolicInsc,i.estado_idEst,g.numGrup,g.nomGruo from persona as p, inscripcion as i, municipio as m , departamento as d, grupo as g where p.idPersona = i.persona_idPersona and p.municipio_idMunic = m.idMunic and m.departamento_idDep = d.idDep and i.grupo_idGrup = g.idGrup and m.departamento_idDep like '".$IdDep."' and p.municipio_idMunic like '".$IdMun."' and g.idGrup like '".$IdGrup."' and i.estado_idEst like '".$IdEst."'order by numSolicInsc asc");
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
  	$rows[]=($row);
  }
				return array('rows'=>$rows);
				
		}

    function contar_inscripciones($IdGrup,$IdDep,$IdMun,$IdEst){
    $result = mysql_query("SELECT count(i.numSolicInsc) from persona as p, inscripcion as i, municipio as m , departamento as d, grupo as g where p.idPersona = i.persona_idPersona and p.municipio_idMunic = m.idMunic and m.departamento_idDep = d.idDep and i.grupo_idGrup = g.idGrup and m.departamento_idDep like '".$IdDep."' and p.municipio_idMunic like '".$IdMun."' and g.idGrup like '".$IdGrup."' and i.estado_idEst like '".$IdEst."'");
    $rows=array();
    while($row=mysql_fetch_array($result,MYSQL_BOTH))
    {
      $rows[]=($row);
    }
    return array('rows'=>$rows);

    }
  }

?>