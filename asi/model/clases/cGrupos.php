<?php
class Grupos
{
	 function __construct() 
{
        global $DATA;
        
        $this->DATA = $DATA;
    }
 function seleccionar_grupos($IdDep,$IdMun,$Inicio,$Limite){
			$result = mysql_query("SELECT g.idGrup,g.numgrup,g.nomGruo,g.lugReuGrup,g.diaReuGrup,g.horaReuGrup,d.nomDep,m.nomMunic,g.latGrup,g.lngGrup from grupo as g,departamento as d, municipio as m where g.municipio_idMunic=m.idMunic and m.departamento_idDep=d.idDep and d.idDep like '".$IdDep."' and m.idMunic like '".$IdMun."' order by g.numGrup asc limit ".$Inicio.",".$Limite."");
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
  	$rows[]=($row);
  }
				return array('rows'=>$rows);
				
		}

    function contar_grupos($IdDep,$IdMun){
    $result = mysql_query("SELECT count(g.idGrup) from grupo as g,departamento as d, municipio as m where g.municipio_idMunic=m.idMunic and m.departamento_idDep=d.idDep and d.idDep like '".$IdDep."' and m.idMunic like '".$IdMun."'");
    $rows=array();
    while($row=mysql_fetch_array($result,MYSQL_BOTH))
    {
      $rows[]=($row);
    }
    return array('rows'=>$rows);

    }
  }

?>