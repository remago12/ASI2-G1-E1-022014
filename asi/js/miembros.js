$(document).ready(function(){

$('#nis').keyup(function(){

miembros();

});

$('#nombre').keyup(function(){

miembros();

});

$('#apellido').keyup(function(){

miembros();

});

$('#departamento').change(function(){
miembros();
}); 

$('#municipio').change(function(){
miembros();
});

$('#grupo').change(function(){
miembros();

});

$('#Genero').change(function(){
miembros();

});

$("ul.paginacion").on("click","li", function(){
    // alert($(this).find("span.pag").text());

var nis = $('#nis').val();
var IdDep = $('#departamento').val();
var IdMun = $('#municipio').val();
var IdGrup= $('#grupo').val();
var Gen= $('#Genero').val();
var nombre =$('#nombre').val();
var apellido =$('#apellido').val();
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

if (IdGrup =="Seleccione un grupo" || IdGrup==""){
  IdGrup ="%";
}

if (Gen =="Elija Genero" || Gen==""){
  Gen ="%";
}
 if(Gen =="Masculino"){
	Gen = "M";
}else if(Gen =="Femenino"){
	Gen ="F";
}

if (nombre==" "){
	nombre ="%";
}else{
	nombre=nombre+"%";
}

if (apellido==" "){
	apellido = "%";
}else{
	apellido=apellido+"%";
}

var Limite = 5;
var pags = $(this).find("span.pag").text();
var Inicio = (parseInt(pags)*parseInt(Limite))-parseInt(Limite);
var paginacion= "";
$.post("../model/clases/ajax.php",{action:"miembros",nis:nis,IdDep:IdDep,IdMun:IdMun,IdGrup:IdGrup,Gen:Gen,nombre:nombre,apellido:apellido,Inicio:Inicio,Limite:Limite},function(data){
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
Genero=data.rows[i]["4"];
if(Genero == "M"){
	Genero ="Masculino";
}else if (Genero == "F"){
	Genero ="Femenino";
}
Fechna = data.rows[i]["5"];
Fechna = new Date(Fechna);
Edad = Math.floor((Date.now() - Fechna)/(31557600000));
grupo = data.rows[i]["1"];
Departamento=data.rows[i]["6"];
Municipio=data.rows[i]["7"];
cadena= cadena +"<tr><td>"+nis+"</td><td>"+NomPer +"</td><td>" + ApelPer +"</td><td>"+Genero+"</td><td>"+Edad+"</td><td>"+Departamento+"</td><td>"+Municipio+"</td><td>"+grupo+"</td><td><a href='modGrupo.php?IdGrup="+btoa(nis)+"'>Editar</a></td></tr>";
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
var IdGrup=$('#grupo').val();
var Gen= $('#Genero').val();
var nombre =$('#nombre').val();
var apellido =$('#apellido').val();

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

if (IdGrup =="Seleccione un grupo" || IdGrup==""){
  IdGrup ="%";
}

if (Gen =="Elija Genero" || Gen==""){
  Gen ="%";
}
 if(Gen =="Masculino"){
	Gen = "M";
}else if(Gen =="Femenino"){
	Gen ="F";
}

if (nombre==" "){
	nombre ="%";
}else{
	nombre=nombre+"%";
}

if (apellido==" "){
	apellido = "%";
}else{
	apellido=apellido+"%";
}

$.post("../model/clases/ajax.php",{action:"contar_miembros",nis:nis,IdDep:IdDep,IdMun:IdMun,IdGrup:IdGrup,Gen:Gen,nombre:nombre,apellido:apellido},function(data){
var Limite = 5;
var rows = data.rows[0]["0"];
var pags = Math.ceil((parseInt(rows)/parseInt(Limite)));
var Inicio = 0;
var paginacion= "";
$.post("../model/clases/ajax.php",{action:"miembros",nis:nis,IdDep:IdDep,IdMun:IdMun,IdGrup:IdGrup,Gen:Gen,nombre:nombre,apellido:apellido,Inicio:Inicio,Limite:Limite},function(data){
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
Genero=data.rows[i]["4"];
if(Genero == "M"){
	Genero ="Masculino";
}else if (Genero == "F"){
	Genero ="Femenino";
}
Fechna = data.rows[i]["5"];
Fechna = new Date(Fechna);
Edad = Math.floor((Date.now() - Fechna)/(31557600000));
grupo = data.rows[i]["1"];
Departamento=data.rows[i]["6"];
Municipio=data.rows[i]["7"];
cadena= cadena +"<tr><td>"+nis+"</td><td>"+NomPer +"</td><td>" + ApelPer +"</td><td>"+Genero+"</td><td>"+Edad+"</td><td>"+Departamento+"</td><td>"+Municipio+"</td><td>"+grupo+"</td><td><a href='modGrupo.php?IdGrup="+btoa(nis)+"'>Editar</a></td></tr>";
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
