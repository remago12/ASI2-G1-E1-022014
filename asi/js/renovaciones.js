$(document).ready(function(){

$('#grupo').change(function(){
renovaciones();
}); 


$('#departamento').change(function(){
renovaciones();
}); 

$('#municipio').change(function(){
renovaciones();
});

$('#estado').change(function(){
renovaciones();
});

$("ul.paginacion").on("click","li", function(){
    // alert($(this).find("span.pag").text());
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
if (IdMun =="Seleccione un municipio" || IdMun==""){
	IdMun ="%";
}
if (IdEst =="Seleccione un estado" || IdEst==""){
	IdEst ="%";
}
var Limite = 5;
var pags = $(this).find("span.pag").text();
var Inicio = (parseInt(pags)*parseInt(Limite))-parseInt(Limite);
var paginacion= "";
$.post("../../model/clases/ajax.php",{action:"solic_inscripciones",IdGrup:IdGrup,IdDep:IdDep,IdMun:IdMun,IdEst:IdEst,Inicio:Inicio,Limite:Limite},function(data){
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
Num_Solic = data.rows[i]["6"];
NomPer= data.rows[i]["0"];
ApelPer=data.rows[i]["1"];
GenPer=data.rows[i]["2"];
Fechna=data.rows[i]["3"];
Fechna = new Date(Fechna);
Edad = Math.floor((Date.now() - Fechna)/(31557600000));
Numgrup =data.rows[i]["8"];
Dept= data.rows[i]["4"];
Munic= data.rows[i]["5"];
if (GenPer == "M"){
	GenPer = "Masculino"
}else{
	GenPer="Femenino"
}
cadena= cadena +"<tr><td>"+ Num_Solic +"</td><td>"+ NomPer+ " " + ApelPer +"</td><td>"+GenPer+"</td><td>"+Edad+"</td><td>"+Numgrup+"</td><td>"+Dept+"</td><td>"+Munic+"</td><td><a href='solicitud_miembro.tpl.php?numSolicInsc="+btoa(Num_Solic)+"'>Editar</a></td></tr>";


$('#loop').html(cadena);
} 
}
},'json');
  });


inscripciones();
});




function inscripciones(){
	var IdGrup = $('#grupo').val();
var IdDep = $('#departamento').val();
var IdMun = $('#municipio').val();
var IdEst = $('#estado').val();
if (IdGrup== "Seleccione un grupo" || IdGrup==" "){
	IdGrup ="%";
}
if (IdDep== "Seleccione un departamento" || IdDep==" "){
	IdDep ="%";
}
if (IdMun =="Seleccione un municipio" || IdMun==" "){
	IdMun ="%";
}
if (IdEst =="Seleccione un estado" || IdEst==" "){
	IdEst ="%";
}
$.post("../../model/clases/ajax.php",{action:"contar_renovaciones",IdGrup:IdGrup,IdDep:IdDep,IdMun:IdMun,IdEst:IdEst},function(data){
var Limite = 5;
var rows = data.rows[0]["0"];
var pags = Math.ceil((parseInt(rows)/parseInt(Limite)));
var Inicio = 0;
var paginacion= "";
$.post("../../model/clases/ajax.php",{action:"solic_renovaciones",IdGrup:IdGrup,IdDep:IdDep,IdMun:IdMun,IdEst:IdEst,Inicio:Inicio,Limite:Limite},function(data){
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
Num_Solic = data.rows[i]["6"];
NomPer= data.rows[i]["0"];
ApelPer=data.rows[i]["1"];
GenPer=data.rows[i]["2"];
Fechna=data.rows[i]["3"];
Fechna = new Date(Fechna);
Edad = Math.floor((Date.now() - Fechna)/(31557600000));
Numgrup =data.rows[i]["8"];
Dept= data.rows[i]["4"];
Munic= data.rows[i]["5"];
if (GenPer == "M"){
	GenPer = "Masculino"
}else{
	GenPer="Femenino"
}
cadena= cadena +"<tr><td>"+ Num_Solic +"</td><td>"+ NomPer+ " " + ApelPer +"</td><td>"+GenPer+"</td><td>"+Edad+"</td><td>"+Numgrup+"</td><td>"+Dept+"</td><td>"+Munic+"</td><td><a href='solicitud_miembro.tpl.php?numSolicInsc="+btoa(Num_Solic)+"'>Editar</a></td></tr>";


$('#loop').html(cadena);
} 
for(p=1; p <= pags;p++){
	paginacion = paginacion + "<li class='pag'><a class='pag' href='#'><span class='pag'>"+p+"</span></a></li>";
}
$('ul.paginacion').html(paginacion)
}
},'json');
},'json');

}
