$(document).ready(function(){

$('#nombre').keyup(function(){
var nombre= $('#nombre').val().toUpperCase();
var apellido= $('#apellido').val().toUpperCase();
var d = new Date();
var año = d.getFullYear().toString();
var NIS= nombre.substr(0,1) + apellido.substr(0,1) + año.substr(2,4);
//var cadena="<input type='text' name='NIS' id='NIS' placeholder='' class='validate[required] medium form-control'><br>";
//$('#nisp').html(cadena); 
$('#NIS').val(NIS);

});

$('#apellido').keyup(function(){
var nombre= $('#nombre').val().toUpperCase();
var apellido= $('#apellido').val().toUpperCase();
var d = new Date();
var año = d.getFullYear().toString();
var NIS= nombre.substr(0,1) + apellido.substr(0,1) + año.substr(2,4);
//var cadena="<input type='text' name='NIS' id='NIS' placeholder='' class='validate[required] medium form-control'><br>";
//$('#nisp').html(cadena); 
$('#NIS').val(NIS);

});

});