$(document).ready(function(){
		$('#modal1').click(function(){
   	cuadro_clinico();
		});
$('#Guardar_Sangre').click(function(){
   	crear_cuadroclinico();
   	divpadecimientos1();
   	padecimientos();
   	divalergias();
   	alergias();
   	divdiscapacidades()
   	discapacidades()
   	$("#Guardar_Sangre").prop( "disabled", true );
   	$("#Modificar_Sangre").prop( "disabled", false );
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
   	divalergias();
   	alergias();
   	dataalergias();
   	divdiscapacidades()
   	discapacidades()
   	datadiscapacidades()
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


}

function datapadecimientos(){
	var NIS =$('#miembro_nisMiem').val();
	var idPad="";
	var NomPad="";
	var cadena="";
	var cadena2="";
	$.post("../model/clases/ajax.php",{action:"dato_padecimiento",NIS:NIS},function(data){
		if (data.rows.length == 0){
$('#datoPadecimientos').empty();
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
cadena2= cadena2 +"<tr><td class='idPad'>"+idPad+"</td><td>"+NomPad+"</td><td><a href='#'>Eliminar</a></td></tr>";
$('#loop1').html(cadena2);
}
/*$('#Borrar_Padecimiento').click(function(){
  borrar_padecimiento();
		});*/
	$("#loop1").on("click","a", function(event){
    //Prevent the hyperlink to perform default behavior
    event.preventDefault();
    var $td = $(this).parent().closest('tr').children('td');
    var idPad = $td.eq(0).text();
    //alert(idPad);
 borrar_padecimiento(idPad);
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
$('#padecimientos')[0].selectedIndex = 0;
datapadecimientos();
},'json');
	
}

function borrar_padecimiento(idPad){
	var NIS =$('#miembro_nisMiem').val();	
	$.post("../model/clases/ajax.php",{action:"borrar_padecimiento",NIS:NIS,idPad:idPad},function(data){
datapadecimientos();
},'json');
	
}

function divalergias(){
cadena= "<hr>"+
"<div class='row'>"+
          "<div class='col-md-4'>"+
          "<label>"+
            "Tipo de Alergia:"+
          "</label>"+
            "<select class='form-control' name='Alergias' id='Alergias'>"+
            "</select>"+
            "<br>"+
            "<button class='btn btn-primary' name='Guardar_Alergia' id='Guardar_Alergia'>Guardar</button>"+
              "</div>"+
          
          
        "</div>"
        +"<div id='datoAlergias'></div>";
        $('#divAlergias').html(cadena);

        $('#Guardar_Alergia').click(function(){
 guardar_alergia();

		});

}

function alergias(){
		$('#Alergias').ready(function(){
$.post("../model/clases/ajax.php",{action:"alergias"},function(data){
var IdAl="";
var NomAl ="";
var cadena="<option>Seleccione una Alergia</option>";
for(i=0; i < data.rows.length;i++){
IdAl=data.rows[i]["0"];
NomAl=data.rows[i]["1"];
cadena=cadena + "<option value='"+IdAl+"'>"+NomAl+"</option>";
$('#Alergias').html(cadena); 
}},'json');

});

}

function dataalergias(){
	var NIS =$('#miembro_nisMiem').val();
	var IdAl="";
	var NomAl="";
	var cadena="";
	var cadena2="";
	$.post("../model/clases/ajax.php",{action:"dato_alergia",NIS:NIS},function(data){
		if (data.rows.length == 0){
$('#datoAlergias').empty();
		}else{
cadena=     "<div class='row'>"+
            "<div class='col-md-12'>"+
              "<table class='table table-striped'>"+
          "<thead>"+
            "<tr>"+
              "<th>N°Alergia</th>"+
              "<th>Alergia</th>"+
            "</tr>"+
          "</thead>"+
          "<tbody name='loop2' id='loop2'>"+
          "</tbody>"+
        "</table>"+
 " </div>"+
        "</div>";
        $('#datoAlergias').html(cadena);
      
        for(i=0; i < data.rows.length;i++){
idAl=data.rows[i]["3"];
NomAl = data.rows[i]["4"];
cadena2= cadena2 +"<tr><td class='idAl'>"+idAl+"</td><td>"+NomAl+"</td><td><a href='#'>Eliminar</a></td></tr>";
$('#loop2').html(cadena2);
}
/*$('#Borrar_Padecimiento').click(function(){
  borrar_padecimiento();
		});*/
	$("#loop2").on("click","a", function(event){
    //Prevent the hyperlink to perform default behavior
    event.preventDefault();
    var $td = $(this).parent().closest('tr').children('td');
    var idAl = $td.eq(0).text();
    //alert(idPad);
 borrar_alergia(idAl);
	});
}

},'json');
	
}

function guardar_alergia(){
	var NIS =$('#miembro_nisMiem').val();
	var Alergia =$('#Alergias').val();
	$.post("../model/clases/ajax.php",{action:"guardar_alergia",NIS:NIS,Alergia:Alergia},function(data){
$('#Alergias')[0].selectedIndex = 0;
dataalergias();
},'json');
	
}

function borrar_alergia(idAl){
	var NIS =$('#miembro_nisMiem').val();	
	$.post("../model/clases/ajax.php",{action:"borrar_alergia",NIS:NIS,idAl:idAl},function(data){
dataalergias();
},'json');
	
}

function divdiscapacidades(){
cadena= "<hr>"+
"<div class='row'>"+
          "<div class='col-md-4'>"+
          "<label>"+
            "Tipo de Habilidad Especial:"+
          "</label>"+
            "<select class='form-control' name='Discapacidades' id='Discapacidades'>"+
            "</select>"+
            "<br>"+
            "<button class='btn btn-primary' name='Guardar_Discapacidad' id='Guardar_Discapacidad'>Guardar</button>"+
              "</div>"+
          
          
        "</div>"
        +"<div id='datoDiscapacidades'></div>";
        $('#divDiscapacidades').html(cadena);

        $('#Guardar_Discapacidad').click(function(){
 guardar_discapacidad();

		});

}

function discapacidades(){
		$('#Discapacidades').ready(function(){
$.post("../model/clases/ajax.php",{action:"discapacidades"},function(data){
var IdDis="";
var NomDis ="";
var cadena="<option>Seleccione una Habilidad Especial</option>";
for(i=0; i < data.rows.length;i++){
IdDis=data.rows[i]["0"];
NomDis=data.rows[i]["1"];
cadena=cadena + "<option value='"+IdDis+"'>"+NomDis+"</option>";
$('#Discapacidades').html(cadena); 
}},'json');

});

}

function datadiscapacidades(){
	var NIS =$('#miembro_nisMiem').val();
	var IdDis="";
	var NomDis="";
	var cadena="";
	var cadena2="";
	$.post("../model/clases/ajax.php",{action:"dato_discapacidad",NIS:NIS},function(data){
		if (data.rows.length == 0){
$('#datoDiscapacidades').empty();
		}else{
cadena=     "<div class='row'>"+
            "<div class='col-md-12'>"+
              "<table class='table table-striped'>"+
          "<thead>"+
            "<tr>"+
              "<th>N°Habilidad Especial</th>"+
              "<th>Habilidad Especial</th>"+
            "</tr>"+
          "</thead>"+
          "<tbody name='loop3' id='loop3'>"+
          "</tbody>"+
        "</table>"+
 " </div>"+
        "</div>";
        $('#datoDiscapacidades').html(cadena);
      
        for(i=0; i < data.rows.length;i++){
idDis=data.rows[i]["3"];
NomDis = data.rows[i]["4"];
cadena2= cadena2 +"<tr><td class='idDis'>"+idDis+"</td><td>"+NomDis+"</td><td><a href='#'>Eliminar</a></td></tr>";
$('#loop3').html(cadena2);
}
/*$('#Borrar_Padecimiento').click(function(){
  borrar_padecimiento();
		});*/
	$("#loop3").on("click","a", function(event){
    //Prevent the hyperlink to perform default behavior
    event.preventDefault();
    var $td = $(this).parent().closest('tr').children('td');
    var idDis = $td.eq(0).text();
    //alert(idPad);
 borrar_discapacidad(idDis);
	});
}

},'json');
	
}

function guardar_discapacidad(){
	var NIS =$('#miembro_nisMiem').val();
	var Discapacidad =$('#Discapacidades').val();
	$.post("../model/clases/ajax.php",{action:"guardar_discapacidad",NIS:NIS,Discapacidad:Discapacidad},function(data){
$('#Discapacidades')[0].selectedIndex = 0;
datadiscapacidades();
},'json');
	
}

function borrar_discapacidad(idDis){
	var NIS =$('#miembro_nisMiem').val();	
	$.post("../model/clases/ajax.php",{action:"borrar_discapacidad",NIS:NIS,idDis:idDis},function(data){
datadiscapacidades();
},'json');
	
}