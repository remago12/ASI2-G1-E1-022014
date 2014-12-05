$(document).ready(function(){
		$("#modal1").click(function(){
   	cuadro_clinico();
		});
$("#Guardar_Sangre").click(function(){
   	crear_cuadroclinico();
		});


});

function cuadro_clinico(){
	var NIS =$('#miembro_nisMiem').val();
	$.post("../model/clases/ajax.php",{action:"cuadro_clinico",NIS:NIS},function(data){
		if (data.rows.length <= 0){
//alert("no hay datos");
		}else{
//alert("hay datos");
for(i=0; i < data.rows.length;i++){
$('#Sangre').val(data.rows[i]["1"]);
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
                "<button class='btn btn-primary'>Guardar</button>"+
                            
              "<button class='btn btn-success'>Borrar</button>"+
          
              "</div>"+
          
          
        "</div>"
        +"<div id='datoPadecimientos'></div>";
        $('#divPadecimientos').html(cadena);

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
cadena2= cadena2 +"<tr><td>"+idPad+"</td><td>"+NomPad+"</td></tr>";
$('#loop1').html(cadena2);
}
		}
},'json');
	
}

function crear_cuadroclinico(){
	var NIS =$('#miembro_nisMiem').val();
	var Sangre =$('#Sangre').val();
	$.post("../model/clases/ajax.php",{action:"nuevo_cuadro",NIS:NIS,Sangre:Sangre},function(data){

},'json');
cuadro_clinico();
}