$(document).ready(function(){

$('#idPersona').change(function(){
var idPersona=$('#idPersona').val();
$.post("../../model/clases/ajax.php",{action:"inscripcion",idPersona:idPersona},function(data){
var NIS = "";
var cadena_NIS="";
var numGrup ="";
var cadena_numGrup ="";
for(i=0; i < data.rows.length;i++){
NIS=data.rows[i]["0"];
numGrup =data.rows[i]["11"];
cadena_NIS="<label>NIS:</label> "+NIS;
cadena_numGrup="<label>Numero de Grupo:</label> "+numGrup;
$('#NIS').html(cadena_NIS); 
$('#numGrup').html(cadena_numGrup); 
}},'json');

$.post("../../model/clases/ajax.php",{action:"persona",idPersona:idPersona},function(data){
var nombre ="";
var cadena_nombre="";
var apellido ="";
var cadena_apellido="";
var DUI="";
var cadena_DUI="";
var fecna ="";
var cadena_fecna="";
var telcel ="";
var cadena_telcel="";
var telcasa="";
var cadena_telcasa="";
var genero ="";
var cadena_genero="";
var direccion ="";
var cadena_direccion="";
for(i=0; i < data.rows.length;i++){
nombre=data.rows[i]["1"];
apellido=data.rows[i]["2"];
genero=data.rows[i]["3"];
if (genero== "M"){
	genero="Masculino";
}else
{
	genero="Femenino";
}
fecna=data.rows[i]["4"];
telcasa=data.rows[i]["5"];
telcel=data.rows[i]["6"];
DUI=data.rows[i]["8"];
direccion= "Colonia "+data.rows[i]["13"]+",Calle "+data.rows[i]["11"]+", Casa # "+data.rows[i]["12"];
cadena_nombre="<label>Nombre:</label> "+nombre;
cadena_apellido="<label>Apellido:</label> "+apellido;
cadena_DUI="<label>DUI:</label>"+DUI;
cadena_fecna="<label>Fecha de nacimiento:</label> "+fecna;
cadena_telcel="<label>Telefono Celular:</label> "+telcel;
cadena_telcasa="<label>Telefono Casa:</label> "+telcasa;
cadena_genero="<label>Genero:</label> "+genero;
cadena_direccion="<label>Direccion:</label> "+direccion;
$('#nombre').html(cadena_nombre); 
$('#apellido').html(cadena_apellido); 
$('#DUI').html(cadena_DUI); 
$('#fecna').html(cadena_fecna); 
$('#telcel').html(cadena_telcel); 
$('#telcasa').html(cadena_telcasa); 
$('#genero').html(cadena_genero);
$('#direccion').html(cadena_direccion);
}},'json');

});



/*$('#nombre').ready(function(){
var cadena="<label>Nombre:</label> Oscar Antonio ";
$('#nombre').html(cadena);

});*/



});