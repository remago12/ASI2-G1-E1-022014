$(document).ready(function(){

	$('#departamento').ready(function(){
$.post("../model/clases/ajax.php",{action:"departamento"},function(data){
var IdDept="";
var NomDept ="";
var cadena ="";
for(i=0; i < data.rows.length;i++){
IdDept=data.rows[i]["0"];
NomDept=data.rows[i]["1"];
cadena=cadena + "<option value='"+IdDept+"'>"+NomDept+"</option>";
$('#departamento').html(cadena); 
}},'json');
});

	$('#departamento').click(function(){
var IdDept=$('#departamento').val();
var IdMUn="";
var NomMUn ="";
var cadena ="";
$.post("../model/clases/ajax.php",{action:"municipio",IdDept:IdDept},function(data){
for(i= 0; i < data.rows.length;i++){
IdMUn=data.rows[i]["0"];
NomMUn=data.rows[i]["1"];
cadena=cadena + "<option value='"+IdMUn+"'>"+NomMUn+"</option>";
$('#municipio').html(cadena); 
}},'json');
});


});


