$(document).ready(function(){

	$('#departamento').ready(function(){
$.post("../model/clases/ajax.php",{action:"departamento"},function(data){
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
if (IdDept== "Seleccione un departamento"){
var cadena="<option value='%' >Selecciona un municipio</option>";
  $('#municipio').html(cadena);
}else{
var IdMUn="";
var NomMUn ="";
var cadena="<option>Selecciona un municipio</option>";
$.post("../model/clases/ajax.php",{action:"municipio",IdDept:IdDept},function(data){

for(i= 0; i < data.rows.length;i++){
IdMUn=data.rows[i]["0"];
NomMUn=data.rows[i]["1"];
cadena=cadena + "<option value='"+IdMUn+"'>"+NomMUn+"</option>";
$('#municipio').html(cadena); 
}},'json');
}});


	$('#grupo').ready(function(){
$.post("../model/clases/ajax.php",{action:"grupo"},function(data){
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

    $('#grupo2').ready(function(){
$.post("../model/clases/ajax.php",{action:"grupo"},function(data){
var IdGrupo="";
var NomGrupo ="";
var cadena="<option>Seleccione un grupo</option>";
for(i=0; i < data.rows.length;i++){
IdGrupo=data.rows[i]["0"];
NumGrupo=data.rows[i]["1"];
NomGrupo=data.rows[i]["2"];
cadena= cadena + "<option value='"+NumGrupo+"'>"+NumGrupo+"  "+NomGrupo+"</option>";
$('#grupo').html(cadena); 

}},'json');
}); 

		$('#grupo').change(function(){
var IdGrupo=$('#grupo').val();
var latGrupo="";
var lngGrupo="";
$.post("../model/clases/ajax.php",{action:"coordenada",IdGrupo:IdGrupo},function(data){

var cadena="<div id='map'> </div>";
for(i=0; i < data.rows.length;i++){
latGrupo=data.rows[i]["0"];
lngGrupo=data.rows[i]["1"];
$('#mapa').html(cadena);
var mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(latGrupo,lngGrupo),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  var map = new google.maps.Map(document.getElementById('map'),
      mapOptions);

  var marker = new google.maps.Marker({
    position: map.getCenter(),
    map: map,
    title: 'Click to zoom',
    draggable:false

  });

  google.maps.event.addListener(marker, 'dragend', function() {

      // Get the Current position, where the pointer was dropped

      var point = marker.getPosition();

      // Center the map at given point

      map.panTo(point);

      // Update the textbox

      latGrupo=point.lat();
      lngGrupo=point.lng();
   });

  google.maps.event.addListener(marker, 'click', function() {
    map.setZoom(8);
    map.setCenter(marker.getPosition());
  });
  google.maps.event.addDomListener(window, 'load', initialize);
/*cadena="<input type='input' name='c_x' class='form-control' id='txt_lat' placeholder='Coordenadas en x' value='"+latGrupo+"'>"+"<input type='input' name='c_y' class='form-control' id='txt_lng' placeholder='Coordenadas en y' value='"+lngGrupo+"'>"
+ "<div id='map'>" + "</div>";
$('#mapa').html(cadena);
$('#mapa').html("<input type='input' name='c_y' class='form-control' id='txt_lng' placeholder='Coordenadas en y' value='"+lngGrupo+"'>");
$('#mapa').html("<div id='map'>")
$('#mapa').html("</div>")
*/
}},'json');
}); 

});


