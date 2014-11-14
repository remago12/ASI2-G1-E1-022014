$(document).ready(function(){
    $('#estado_inscripcion').focusin(function(){
var idEstado="";
var nomEstado="";
var cadena="";
$.post("../../model/clases/ajax.php",{action:"estado_inscripcion"},function(data){

for(i= 0; i < data.rows.length;i++){
idEstado=data.rows[i]["0"];
nomEstado=data.rows[i]["1"];
cadena=cadena + "<option value='"+idEstado+"'>"+nomEstado+"</option>";
$('#estado_inscripcion').html(cadena); 
}},'json');
});

});