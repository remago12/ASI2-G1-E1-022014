$(document).ready(function(){

$('#idPersona').change(function(){
var idPersona=$('#idPersona').val();
$.post("../../model/clases/ajax.php",{action:"inscripcion",idPersona:idPersona},function(data){
var NIS = "";
var cadena_NIS="";
for(i=0; i < data.rows.length;i++){
NIS=data.rows[i]["0"];
//apellido=data.rows[i]["2"];
cadena_NIS="<label>NIS:</label> "+NIS;
//cadena_apellido="<label>Apellido:</label> "+apellido;
$('#NIS').html(cadena_NIS); 
//$('#apellido').html(cadena_apellido); 
}},'json');

$.post("../../model/clases/ajax.php",{action:"persona",idPersona:idPersona},function(data){
var nombre ="";
var cadena_nombre="";
var apellido ="";
var cadena_apellido="";
var DUI="";
var cadena_DUI="";
for(i=0; i < data.rows.length;i++){
nombre=data.rows[i]["1"];
apellido=data.rows[i]["2"];
DUI=data.rows[i]["8"];
cadena_nombre="<label>Nombre:</label> "+nombre;
cadena_apellido="<label>Apellido:</label> "+apellido;
cadena_DUI="<label>DUI:</label> "+DUI;
$('#nombre').html(cadena_nombre); 
$('#apellido').html(cadena_apellido); 
$('#DUI').html(cadena_DUI); 
}},'json');

});



/*$('#nombre').ready(function(){
var cadena="<label>Nombre:</label> Oscar Antonio ";
$('#nombre').html(cadena);

});*/



});