$(document).ready(function(){

$('#').keyup(function(){

miembros();

});

$('#departamento').change(function(){
grupos();
}); 

$('#municipio').change(function(){
grupos();
});

 $('#myModal').on('show.bs.modal', function(event) {
        $("#txt_lat").val($(event.relatedTarget).data('latitud'));
        $("#txt_lng").val($(event.relatedTarget).data('longitud'));

    });

  $('#myModal').on('shown.bs.modal', function(event) {
 var lat = document.getElementById('txt_lat').value;
 var lng = document.getElementById('txt_lng').value; 
  var mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(lat,lng),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  var map = new google.maps.Map(document.getElementById('map'),
      mapOptions);
  var img = new google.maps.MarkerImage("../img/scouts.png");

  var marker = new google.maps.Marker({
    position: map.getCenter(),
    map: map,
    title: 'Click to zoom',
    draggable:true,
    icon:img

  });

  google.maps.event.addListener(marker, 'dragend', function() {

      // Get the Current position, where the pointer was dropped

      var point = marker.getPosition();

      // Center the map at given point

      map.panTo(point);

      // Update the textbox

      document.getElementById('txt_lat').value=point.lat();
      document.getElementById('txt_lng').value=point.lng();
   });

  google.maps.event.addListener(marker, 'click', function() {
    map.setZoom(8);
    map.setCenter(marker.getPosition());
  });


google.maps.event.addDomListener(window, 'load', initialize);
        
    });



$("ul.paginacion").on("click","li", function(){
    // alert($(this).find("span.pag").text());
var IdDep = $('#departamento').val();
var IdMun = $('#municipio').val();
var nomgruo = $('#nomgrup').val();
//var IdEst = $('#estado').val();
if (IdDep== "Seleccione un departamento" || IdDep==""){
	IdDep ="%";
}
if (IdMun =="Selecciona un municipio" || IdMun==""){
	IdMun ="%";
}

if (nomgruo==" "){
  nomgruo ="%";
}else{
  nomgruo=nomgruo+"%";
}

var Limite = 5;
var pags = $(this).find("span.pag").text();
var Inicio = (parseInt(pags)*parseInt(Limite))-parseInt(Limite);
var paginacion= "";
$.post("../model/clases/ajax.php",{action:"grupos",IdDep:IdDep,IdMun:IdMun,Nomgrup:nomgruo,Inicio:Inicio,Limite:Limite},function(data){
var cadena="";
//var cadena="<option>Seleccione un grupo</option>";
if (data.rows.length == 0){
cadena="";
$('#loop').html(cadena);
alert("No hay datos disponibles");
}else{
for(i=0; i < data.rows.length;i++){
Idgrup=data.rows[i]["0"];
Numgrup = data.rows[i]["1"];
Nomgrup= data.rows[i]["2"];
Departamento=data.rows[i]["5"];
Municipio=data.rows[i]["6"];
Lugarreu=data.rows[i]["3"];
Diareu = data.rows[i]["4"];
Horareu =data.rows[i]["5"];
latitud= data.rows[i]["8"];
longitud = data.rows[i]["9"];
cadena= cadena +"<tr><td>"+Numgrup +"</td><td>"+Nomgrup +"</td><td>" + Departamento +"</td><td>"+Municipio+"</td><td>"+Lugarreu+"</td><td>"+Diareu+"</td><td>"+Horareu+"</td><td><a class='btn btn-primary btn-lg' data-toggle='modal' data-target='#myModal' data-latitud='"+latitud+"' data-longitud='"+longitud+"'>mapa</a></td><td><a class='btn btn-primary btn-lg' href='modGrupo.php?IdGrup="+btoa(Idgrup)+"'>Editar</a></td></tr>";
$('#loop').html(cadena);
} 
}
},'json');
  });


grupos();
});


function grupos(){
var IdDep = $('#departamento').val();
var IdMun = $('#municipio').val();
var nomgruo= $('#nomgrup').val();
if (IdDep== "Seleccione un departamento" || IdDep==" "){
	IdDep ="%";
}
if (IdMun =="Selecciona un municipio" || IdMun==" "){
	IdMun ="%";
}

if (nomgruo==" "){
  nomgruo ="%";
}else{
  nomgruo=nomgruo+"%";
}


$.post("../model/clases/ajax.php",{action:"contar_grupos",IdDep:IdDep,IdMun:IdMun,Nomgrup:nomgruo},function(data){
var Limite = 5;
var rows = data.rows[0]["0"];
var pags = Math.ceil((parseInt(rows)/parseInt(Limite)));
var Inicio = 0;
var paginacion= "";
$.post("../model/clases/ajax.php",{action:"grupos",IdDep:IdDep,IdMun:IdMun,Nomgrup:nomgruo,Inicio:Inicio,Limite:Limite},function(data){
//var cadena="<option>Seleccione un grupo</option>";
if (data.rows.length == 0){
var cadena="";
$('#loop').html(cadena);
alert("No hay datos disponibles");
}else{
for(i=0; i < data.rows.length;i++){
Idgrup=data.rows[i]["0"];
Numgrup = data.rows[i]["1"];
Nomgrup= data.rows[i]["2"];
Departamento=data.rows[i]["6"];
Municipio=data.rows[i]["7"];
Lugarreu=data.rows[i]["3"];
Diareu = data.rows[i]["4"];
Horareu =data.rows[i]["5"];
latitud= data.rows[i]["8"];
longitud = data.rows[i]["9"];

cadena= cadena +"<tr><td>"+Numgrup +"</td><td>"+Nomgrup +"</td><td>" + Departamento +"</td><td>"+Municipio+"</td><td>"+Lugarreu+"</td><td>"+Diareu+"</td><td>"+Horareu+"</td><td><a class='btn btn-primary btn-lg' data-toggle='modal' data-target='#myModal' data-latitud='"+latitud+"' data-longitud='"+longitud+"'>mapa</a></td><td><a class='btn btn-primary btn-lg' href='modGrupo.php?IdGrup="+btoa(Idgrup)+"'>Editar</a></td></tr>";
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
