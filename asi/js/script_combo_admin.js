$(document).ready(function(){

	$('#departamento').ready(function(){
$.post("../../model/clases/ajax.php",{action:"departamento"},function(data){
var IdDept="";
var NomDept ="";
var cadena="<option>Seleccione un departamento</option>";
for(i=0; i < data.rows.length;i++){
IdDept=data.rows[i]["0"];
NomDept=data.rows[i]["1"];
cadena=cadena + "<option value='"+IdDept+"'>"+NomDept+"</option>";
$('#departamento').html(cadena); 
}},'json');
});

	$('#departamento').change(function(){
var IdDept=$('#departamento').val();
var IdMUn="";
var NomMUn ="";
var cadena="<option>Seleccione un municipio</option>";
$.post("../../model/clases/ajax.php",{action:"municipio",IdDept:IdDept},function(data){

for(i= 0; i < data.rows.length;i++){
IdMUn=data.rows[i]["0"];
NomMUn=data.rows[i]["1"];
cadena=cadena + "<option value='"+IdMUn+"'>"+NomMUn+"</option>";
$('#municipio').html(cadena); 
}},'json');
});


	$('#grupo').ready(function(){
$.post("../../model/clases/ajax.php",{action:"grupo"},function(data){
var IdGrupo="";
var NomGrupo ="";
var cadena="<option>Seleccione un grupo</option>";
for(i=0; i < data.rows.length;i++){
IdGrupo=data.rows[i]["0"];
NumGrupo=data.rows[i]["1"];
NomGrupo=data.rows[i]["2"];
cadena= cadena + "<option value='"+IdGrupo+"'>"+NumGrupo+"  "+NomGrupo+"</option>";
$('#grupo').html(cadena); 

}},'json');
}); 

    $('#estado').ready(function(){
$.post("../../model/clases/ajax.php",{action:"estado"},function(data){
var IdEstado="";
var NomEstado ="";
var cadena="<option>Seleccione un estado</option>";
for(i=0; i < data.rows.length;i++){
IdEstado=data.rows[i]["0"];
NomEstado=data.rows[i]["1"];
cadena=cadena + "<option value='"+IdEstado+"'>"+NomEstado+"</option>";
$('#estado').html(cadena); 
}},'json');
});


});
