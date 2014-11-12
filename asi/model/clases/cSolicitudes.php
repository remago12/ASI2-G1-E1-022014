<?php
class Solicitud
{
	 function __construct() 
{
        global $DATA;
        
        $this->DATA = $DATA;
    }

 function seleccionar_inscripciones($IdGrup,$IdDep,$IdMun,$IdEst,$Inicio,$Limite){
			$result = mysql_query("SELECT p.nomPer,p.apelPer,p.genPer,p.fechNacPer,d.nomDep ,m.nomMunic , i.numSolicInsc,i.estado_idEst,g.numGrup,g.nomGruo from persona as p, inscripcion as i, municipio as m , departamento as d, grupo as g where p.idPersona = i.persona_idPersona and p.municipio_idMunic = m.idMunic and m.departamento_idDep = d.idDep and i.grupo_idGrup = g.idGrup and m.departamento_idDep like '".$IdDep."' and p.municipio_idMunic like '".$IdMun."' and g.idGrup like '".$IdGrup."' and i.estado_idEst like '".$IdEst."'order by numSolicInsc asc limit ".$Inicio.",".$Limite."");
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
  
  function seleccionar_renovaciones($IdGrup,$IdDep,$IdMun,$IdEst){
      $result = mysql_query("SELECT r.numSolRen,mi.nisMiem,p.nomPer,p.apelPer,p.genPer,p.fechNacPer,d.nomDep,m.nomMunic,g.numGrup FROM renovacion as r, miembro as mi, persona as p,departamento as d,municipio as m,grupo as g where r.miembro_nisMiem = mi.nisMiem and mi.persona_idPersona=p.idPersona and p.municipio_idMunic=m.idMunic and m.departamento_idDep=d.idDep and mi.grupo_idGrup=g.idGrup and g.idGrup like '".$IdGrup."' and d.idDep like '".$IdDep."' and m.idMunic like '".$IdMun."' order by r.numSolRen asc ");
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
    $rows[]=($row);
  }
        return array('rows'=>$rows);
        
    }

    function contar_renovaciones($IdGrup,$IdDep,$IdMun,$IdEst){
    $result = mysql_query("SELECT count(r.numSolRen) FROM renovacion as r, miembro as mi, persona as p,departamento as d,municipio as m,grupo as g where r.miembro_nisMiem = mi.nisMiem and mi.persona_idPersona=p.idPersona and p.municipio_idMunic=m.idMunic and m.departamento_idDep=d.idDep and mi.grupo_idGrup=g.idGrup and g.idGrup like '".$IdGrup."' and d.idDep like '".$IdDep."' and m.idMunic like '".$IdMun."' ");
    $rows=array();
    while($row=mysql_fetch_array($result,MYSQL_BOTH))
    {
      $rows[]=($row);
    }
    return array('rows'=>$rows);

    }

  }
  


?>