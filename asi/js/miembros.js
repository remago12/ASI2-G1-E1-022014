$(document).ready(function(){

$('#nis').keyup(function(){

miembros();

});

$('#departamento').change(function(){
miembros();
}); 

$('#municipio').change(function(){
miembros();
});


$("ul.paginacion").on("click","li", function(){
    // alert($(this).find("span.pag").text());

var nis = $('#nis').val();
var IdDep = $('#departamento').val();
var IdMun = $('#municipio').val();
if (nis==" "){
	nis ="%";
}else{
	nis=nis+"%";
}

//var IdEst = $('#estado').val();
if (IdDep== "Seleccione un departamento" || IdDep==""){
	IdDep ="%";
}
if (IdMun =="Selecciona un municipio" || IdMun==""){
	IdMun ="%";
}
var Limite = 5;
var pags = $(this).find("span.pag").text();
var Inicio = (parseInt(pags)*parseInt(Limite))-parseInt(Limite);
var paginacion= "";
$.post("../model/clases/ajax.php",{action:"miembros",nis:nis},function(data){
//var cadena="<option>Seleccione un grupo</option>";
if (data.rows.length == 0){
var cadena="";
$('#loop').html(cadena);
alert("No hay datos disponibles");
}else{
for(i=0; i < data.rows.length;i++){
nis=data.rows[i]["0"];
NomPer = data.rows[i]["2"];
ApelPer= data.rows[i]["3"];
Departamento=data.rows[i]["6"];
Municipio=data.rows[i]["7"];
Lugarreu=data.rows[i]["3"];
Diareu = data.rows[i]["4"];
Horareu =data.rows[i]["5"];
cadena= cadena +"<tr><td>"+nis+"</td><td>"+NomPer +"</td><td>" + ApelPer +"</td><td>"+Municipio+"</td><td>"+Lugarreu+"</td><td>"+Diareu+"</td><td>"+Horareu+"</td><td><a href='modGrupo.php?IdGrup="+btoa(nis)+"'>Editar</a></td></tr>";
$('#loop').html(cadena);
} 
}
},'json');
  });


miembros();
});


function miembros(){
var nis = $('#nis').val();
var IdDep = $('#departamento').val();
var IdMun = $('#municipio').val();
if (nis==" "){
	nis ="%";
}else{
	nis=nis+"%";
}

if (IdDep== "Seleccione un departamento" || IdDep==""){
	IdDep ="%";
}

if (IdMun =="Selecciona un municipio" || IdMun==" "){
	IdMun ="%";
}

$.post("../model/clases/ajax.php",{action:"contar_miembros",nis:nis},function(data){
var Limite = 5;
var rows = data.rows[0]["0"];
var pags = Math.ceil((parseInt(rows)/parseInt(Limite)));
var Inicio = 0;
var paginacion= "";
$.post("../model/clases/ajax.php",{action:"miembros",nis:nis},function(data){
//var cadena="<option>Seleccione un grupo</option>";
if (data.rows.length == 0){
var cadena="";
$('#loop').html(cadena);
alert("No hay datos disponibles");
}else{
for(i=0; i < data.rows.length;i++){
nis=data.rows[i]["0"];
NomPer = data.rows[i]["2"];
ApelPer= data.rows[i]["3"];
Departamento=data.rows[i]["6"];
Municipio=data.rows[i]["7"];
Lugarreu=data.rows[i]["3"];
Diareu = data.rows[i]["4"];
Horareu =data.rows[i]["5"];
cadena= cadena +"<tr><td>"+nis+"</td><td>"+NomPer +"</td><td>" + ApelPer +"</td><td>"+Municipio+"</td><td>"+Lugarreu+"</td><td>"+Diareu+"</td><td>"+Horareu+"</td><td><a href='modGrupo.php?IdGrup="+btoa(nis)+"'>Editar</a></td></tr>";
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
