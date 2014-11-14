<?php
class Inscripcion
{
	 function __construct() 

	{
        global $DATA;
        
        $this->DATA = $DATA;
    }

    function seleccionar_persona($idI){
			$result = mysql_query("Select p.* FROM persona as p,inscripcion as i where p.idPersona = i.persona_idPersona and i.numSolicInsc =".$idI);
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
  	$rows[]=($row);
  }
				return array('rows'=>$rows);
				
		}

      function seleccionar_estado_inscripcion(){
     $result = mysql_query("SELECT * FROM estado WHERE tipoEstado_idTipEst = 2");
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
    $rows[]=($row);
  }
        return array('rows'=>$rows);
        
    }


    /* function seleccionar_inscripcion($idPersona){
      $result = mysql_query("SELECT i.*, g.numGrup FROM inscripcion AS i, grupo AS g WHERE g.idGrup = i.grupo_idGrup and i.persona_idPersona =".$idPersona);
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
    $rows[]=($row);
  }
        return array('rows'=>$rows);
        
    }*/
  /*  function seleccionar_numinscripcion($year){
      $result = mysql_query("SELECT numSolicInsc FROM inscripcion WHERE numSolicInsc LIKE '%______".$year."%' ORDER BY numSolicInsc desc limit 1 ");
  $rows=array();
  while($row=mysql_fetch_array($result,MYSQL_BOTH)){
    $rows[]=($row);
  }
        return array('rows'=>$rows);
        
    }
*/
    
    function seleccionar_inscripciones()
{
 $sql= "SELECT i.*,p.*,g.numGrup from inscripcion as i, persona as p , grupo as g where i.persona_idPersona = p.idPersona and i.grupo_idGrup=g.idGrup";
  $rs= $this-> DATA->Execute($sql);
  if($rs->RecordCount()){
    while(!$rs->EOF){
      $id= $rs->fields['numSolicInsc'];
      $info[$id]['numSolicInsc']=$rs->fields['numSolicInsc'];
      $info[$id]['nomPer']=$rs->fields['nomPer'];
      $info[$id]['apelPer']=$rs->fields['apelPer'];
      $info[$id]['genPer']=$rs->fields['genPer'];
      $info[$id]['fechNacPer']=$rs->fields['fechNacPer'];
      $info[$id]['persona_idPersona']=$rs->fields['persona_idPersona'];
      $info[$id]['numGrup']=$rs->fields['numGrup'];
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
 
     function seleccionar_inscripcion($idInscripcion)
{
 $sql= "SELECT i.*,p.*,g.numGrup,e.* from inscripcion as i, persona as p , grupo as g , estado as e where i.persona_idPersona = p.idPersona  and i.grupo_idGrup=g.idGrup and e.idEst=i.estado_idEst and i.numSolicInsc =".$idInscripcion;
  $rs= $this-> DATA->Execute($sql);
  if($rs->RecordCount()){
    while(!$rs->EOF){
      $id= $rs->fields['numSolicInsc'];
      $info[$id]['numSolicInsc']=$rs->fields['numSolicInsc'];
      $info[$id]['nomPer']=$rs->fields['nomPer'];
      $info[$id]['apelPer']=$rs->fields['apelPer'];
      $info[$id]['genPer']=$rs->fields['genPer'];
      $info[$id]['fechNacPer']=$rs->fields['fechNacPer'];
      $info[$id]['persona_idPersona']=$rs->fields['persona_idPersona'];
      $info[$id]['numGrup']=$rs->fields['numGrup'];
      $info[$id]['idEst']=$rs->fields['idEst'];
      $info[$id]['nomEst']=$rs->fields['nomEst'];
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

  function pago_inscripcion($parametrosReg){
     $sql="UPDATE inscripcion SET exePagIns=?,estado_idEst=?,numFactIns=?,fchaPagIns=?,montoIns=?,banco_idBanc=?,img_Ins=? where numSolicInsc=?";
    $save = $this->DATA->Execute($sql, $parametrosReg); 
          if ($save){
            return true;
        } else {
            return false;
        }


  }


}

?>