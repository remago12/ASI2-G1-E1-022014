$(document).ready(function(){

$('#grupo').change(function(){
var IdGrup = $('#grupo').val();
var IdDep = $('#departamento').val();
var IdMun = $('#municipio').val();
var IdEst = $('#estado').val();
if (IdGrup== "Seleccione un grupo" || IdGrup==""){
	IdGrup ="%";
}
if (IdDep== "Seleccione un departamento" || IdDep==""){
	IdDep ="%";
}
if (IdMun =="Selecciona un municipio" || IdMun==""){
	IdMun ="%";
}
if (IdEst =="Seleccione un estado" || IdEst==""){
	IdEst ="%";
}
$.post("../../model/clases/ajax.php",{action:"solic_inscripciones",IdGrup:IdGrup,IdDep:IdDep,IdMun:IdMun,IdEst:IdEst},function(data){
var Num_Solic ="";
var NomPer="";
var ApelPer ="";
var cadena="";
//var cadena="<option>Seleccione un grupo</option>";
if (data.rows.length == 0){
cadena="";
$('#loop').html(cadena);
alert("No hay datos disponibles");
}else{
for(i=0; i < data.rows.length;i++){
Num_Solic = data.rows[i]["5"];
NomPer= data.rows[i]["0"];
ApelPer=data.rows[i]["1"];
GenPer=data.rows[i]["2"];
if (GenPer == "M"){
	GenPer = "Masculino"
}else{
	GenPer="Femenino"
}
cadena= cadena +"<tr><td>"+ Num_Solic +"</td><td>"+ NomPer+ " " + ApelPer +"</td><td>"+GenPer+"</td></tr>";

$('#loop').html(cadena);
} 
}
},'json');
}); 

$('#departamento').change(function(){
var IdGrup = $('#grupo').val();
var IdDep = $('#departamento').val();
var IdMun = $('#municipio').val();
var IdEst = $('#estado').val();
if (IdGrup== "Seleccione un grupo" || IdGrup==""){
	IdGrup ="%";
}
if (IdDep== "Seleccione un departamento" || IdDep==""){
	IdDep ="%";
}
if (IdMun =="Selecciona un municipio" || IdMun==""){
	IdMun ="%";
}
if (IdEst =="Seleccione un estado" || IdEst==""){
	IdEst ="%";
}
$.post("../../model/clases/ajax.php",{action:"solic_inscripciones",IdGrup:IdGrup,IdDep:IdDep,IdMun:IdMun,IdEst:IdEst},function(data){
var Num_Solic ="";
var NomPer="";
var ApelPer ="";
var cadena="";
//var cadena="<option>Seleccione un grupo</option>";
if (data.rows.length == 0){
cadena="";
$('#loop').html(cadena);
alert("No hay datos disponibles");
}else{
for(i=0; i < data.rows.length;i++){
Num_Solic = data.rows[i]["5"];
NomPer= data.rows[i]["0"];
ApelPer=data.rows[i]["1"];
GenPer=data.rows[i]["2"];
if (GenPer == "M"){
	GenPer = "Masculino"
}else{
	GenPer="Femenino"
}
cadena= cadena +"<tr><td>"+ Num_Solic +"</td><td>"+ NomPer+ " " + ApelPer +"</td><td>"+GenPer+"</td></tr>";

$('#loop').html(cadena);
} 
}
},'json');
}); 

$('#municipio').change(function(){
var IdGrup = $('#grupo').val();
var IdDep = $('#departamento').val();
var IdMun = $('#municipio').val();
var IdEst = $('#estado').val();
if (IdGrup== "Seleccione un grupo" || IdGrup==""){
	IdGrup ="%";
}
if (IdDep== "Seleccione un departamento" || IdDep==""){
	IdDep ="%";
}
if (IdMun =="Selecciona un municipio" || IdMun==""){
	IdMun ="%";
}
if (IdEst =="Seleccione un estado" || IdEst==""){
	IdEst ="%";
}
$.post("../../model/clases/ajax.php",{action:"solic_inscripciones",IdGrup:IdGrup,IdDep:IdDep,IdMun:IdMun,IdEst:IdEst},function(data){
var Num_Solic ="";
var NomPer="";
var ApelPer ="";
var cadena="";
//var cadena="<option>Seleccione un grupo</option>";
if (data.rows.length == 0){
cadena="";
$('#loop').html(cadena);
alert("No hay datos disponibles");
}else{
for(i=0; i < data.rows.length;i++){
Num_Solic = data.rows[i]["5"];
NomPer= data.rows[i]["0"];
ApelPer=data.rows[i]["1"];
GenPer=data.rows[i]["2"];
if (GenPer == "M"){
	GenPer = "Masculino"
}else{
	GenPer="Femenino"
}
cadena= cadena +"<tr><td>"+ Num_Solic +"</td><td>"+ NomPer+ " " + ApelPer +"</td><td>"+GenPer+"</td></tr>";

$('#loop').html(cadena);
} 
}
},'json');
});

$('#estado').change(function(){
var IdGrup = $('#grupo').val();
var IdDep = $('#departamento').val();
var IdMun = $('#municipio').val();
var IdEst = $('#estado').val();
if (IdGrup== "Seleccione un grupo" || IdGrup==""){
	IdGrup ="%";
}
if (IdDep== "Seleccione un departamento" || IdDep==""){
	IdDep ="%";
}
if (IdMun =="Selecciona un municipio" || IdMun==""){
	IdMun ="%";
}
if (IdEst =="Seleccione un estado" || IdEst==""){
	IdEst ="%";
}
$.post("../../model/clases/ajax.php",{action:"solic_inscripciones",IdGrup:IdGrup,IdDep:IdDep,IdMun:IdMun,IdEst:IdEst},function(data){
var Num_Solic ="";
var NomPer="";
var ApelPer ="";
var cadena="";
//var cadena="<option>Seleccione un grupo</option>";
if (data.rows.length == 0){
cadena="";
$('#loop').html(cadena);
alert("No hay datos disponibles");
}else{
for(i=0; i < data.rows.length;i++){
Num_Solic = data.rows[i]["5"];
NomPer= data.rows[i]["0"];
ApelPer=data.rows[i]["1"];
GenPer=data.rows[i]["2"];
if (GenPer == "M"){
	GenPer = "Masculino"
}else{
	GenPer="Femenino"
}
cadena= cadena +"<tr><td>"+ Num_Solic +"</td><td>"+ NomPer+ " " + ApelPer +"</td><td>"+GenPer+"</td></tr>";

$('#loop').html(cadena);
} 
}
},'json');
});

});