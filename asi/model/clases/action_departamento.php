<?php
require_once '../data/dataBase.php';
require_once '../clases/cRegristro.php';

    // Objetos
    $idDep  = $_POST['idDep'];


   echo '<div class="section"><label>Departamento:</label>';
  echo  '<div><select id="id_dep" name="id_dep" onchange="cargarMun(this.value)">';

     if($idDep !=null){
      try {
          $municipio = $cRegistro->seleccionar_departamento($idDep); 

          if($municipio !=null){
               foreach ($municipio AS $key => $mun) {
                    $idMunic = $mun['idMunic'];
                    $nomMunic= $mun['nomMunic'];

                    echo "<option value='".$idMunic."'>".$nomMunic."</option>";
      
                } 
          }else{
           echo '<option value="">No se encontro..</option>';
           }

      } catch (Exception $e) {
          echo '<option value="">Error...</option>';
      }
       

    }else{
      echo '<option value="">Seleccione un Pa&iacutes...</option>';
     }

  echo "</select></div>";
 
    ?>
