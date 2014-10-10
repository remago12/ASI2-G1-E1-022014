$(document).ready(function(){

	$('#departamento').click(function(){
$.post("../model/clases/ajax.php",{action:"departamento"},function(data){
var IdDept="";
var NomDept ="";
cadena ="<option>HOla</option>";
$('#combodep').html(cadena);
for(i=0;i<data.rows.lenght;i++){
IdDeot=data.rows[i]["0"];
NomDept=data.rows[i]["1"];
cadena ="<option>"+NomDept+"</option>";
$('#departamento').append(cadena);
}},'json');
});

});

