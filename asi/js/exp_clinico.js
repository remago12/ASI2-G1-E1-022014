$(document).ready(function(){
		$('#modal1').click(function(){
   	cuadro_clinico();
		});
$('#Guardar_Sangre').click(function(){
   	crear_cuadroclinico();
   	divpadecimientos1();
   	padecimientos();
		});

$('#Modificar_Sangre').click(function(){
  modificar_sangre();
		});

});

function cuadro_clinico(){
	var NIS =$('#miembro_nisMiem').val();
	$.post("../model/clases/ajax.php",{action:"cuadro_clinico",NIS:NIS},function(data){
		if (data.rows.length <= 0){
			$('#Guardar_Sangre').prop( "disabled", false );
			$('#Modificar_Sangre').prop( "disabled", true );
			
//alert("no hay datos");
		}else{
//alert("hay datos");
$("#Guardar_Sangre").prop( "disabled", true );
for(i=0; i < data.rows.length;i++){
$('#Sangre').val(data.rows[i]["1"]);
$("#Modificar_Sangre").prop( "disabled", false );
}
divpadecimientos1();
padecimientos();
datapadecimientos();
		}
},'json');
}

function padecimientos(){
		$('#padecimientos').ready(function(){
$.post("../model/clases/ajax.php",{action:"padecimientos"},function(data){
var IdPad="";
var NomPad ="";
var cadena="<option>Seleccione un Padecimiento</option>";
for(i=0; i < data.rows.length;i++){
IdPad=data.rows[i]["0"];
NomPad=data.rows[i]["1"];
cadena=cadena + "<option value='"+IdPad+"'>"+NomPad+"</option>";
$('#padecimientos').html(cadena); 
}},'json');

});

}

function divpadecimientos1(){
cadena= "<div class='row'>"+
          "<div class='col-md-4'>"+
          "<label>"+
            "Tipo de Padecimiento:"+
          "</label>"+
            "<select class='form-control' name='padecimientos' id='padecimientos'>"+
            "</select>"+
            "<br>"+
            "<button class='btn btn-primary' name='Guardar_Padecimiento' id='Guardar_Padecimiento'>Guardar</button>"+
              "</div>"+
          
          
        "</div>"
        +"<div id='datoPadecimientos'></div>";
        $('#divPadecimientos').html(cadena);

        $('#Guardar_Padecimiento').click(function(){
  guardar_padecimiento();
 
		});

$('#Borrar_Padecimiento').click(function(){
  borrar_padecimiento();
		});

}

function datapadecimientos(){
	var NIS =$('#miembro_nisMiem').val();
	var idPad="";
	var NomPad="";
	var cadena="";
	var cadena2="";
	$.post("../model/clases/ajax.php",{action:"dato_padecimiento",NIS:NIS},function(data){
		if (data.rows.length == 0){
//alert("no hay datos");
		}else{
cadena=     "<div class='row'>"+
            "<div class='col-md-12'>"+
              "<table class='table table-striped'>"+
          "<thead>"+
            "<tr>"+
              "<th>N°Padecimiento</th>"+
              "<th>Nombre</th>"+
            "</tr>"+
          "</thead>"+
          "<tbody name='loop1' id='loop1'>"+
          "</tbody>"+
        "</table>"+
 " </div>"+
        "</div>";
        $('#datoPadecimientos').html(cadena);
      
        for(i=0; i < data.rows.length;i++){
idPad=data.rows[i]["3"];
NomPad = data.rows[i]["4"];
cadena2= cadena2 +"<tr><td>"+idPad+"</td><td>"+NomPad+"</td><td><a id='Borrar_Padecimiento' href='#'>Eliminar</a></td></tr>";
$('#loop1').html(cadena2);
}
$('#Borrar_Padecimiento').click(function(){
  borrar_padecimiento();
		});


		}
},'json');
	
}

function crear_cuadroclinico(){
	var NIS =$('#miembro_nisMiem').val();
	var Sangre =$('#Sangre').val();
	$.post("../model/clases/ajax.php",{action:"nuevo_cuadro",NIS:NIS,Sangre:Sangre},function(data){

},'json');
}

function modificar_sangre(){
	var NIS =$('#miembro_nisMiem').val();
	var Sangre =$('#Sangre').val();
	$.post("../model/clases/ajax.php",{action:"modificar_sangre",NIS:NIS,Sangre:Sangre},function(data){

},'json');
}

function guardar_padecimiento(){
	var NIS =$('#miembro_nisMiem').val();
	var Padecimiento =$('#padecimientos').val();
	$.post("../model/clases/ajax.php",{action:"guardar_padecimiento",NIS:NIS,Padecimiento:Padecimiento},function(data){
datapadecimientos();
},'json');
	
}

function borrar_padecimiento(){
	var NIS =$('#miembro_nisMiem').val();
	alert("");
//	var Padecimiento =$('#padecimientos').val();
	/*$.post("../model/clases/ajax.php",{action:"borrar_padecimiento",NIS:NIS,Padecimiento:Padecimiento},function(data){
datapadecimientos();
},'json');*/
	
}