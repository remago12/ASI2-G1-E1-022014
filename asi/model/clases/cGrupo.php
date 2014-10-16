<?php
	class Grupo{


		function __construct() {
        global $DATA;
        $this->DATA = $DATA;
    	}

    	function crearGrupo($paramsGrupo){	


    		$sql="INSERT INTO grupo(numGrup, nomGruo, exclGrup, lugReuGrup, proLugGrup, fchaFundGrup, lugNacGrup, diaReuGrup, horaReuGrup, limMiemGrup, callGrup, numCasGrup, colGrup, idMunic, latGrup, lngGrup, idEst, nomUsu, telGrup)"
    			." values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    		$save = $this->DATA->Execute($sql, $paramsGrupo); 
          	if ($save){
            	return true;
        	} else {
            	return false;
        	}
    	}



	}
