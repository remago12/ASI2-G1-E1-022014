$(document).ready(function(){

$('#nombre').keyup(function(){
var nombre= $('#nombre').val().toUpperCase();
var apellido= $('#apellido').val().toUpperCase();
var last_id = "";
var d = new Date();
var año = d.getFullYear().toString();
$.post("../model/clases/ajax.php",{action:"corrnis"},function(data){

for(i= 0; i < data.rows.length;i++){
last_id=data.rows[i]["0"];
if (last_id.length == 1){
	var NIS= nombre.substr(0,1) + apellido.substr(0,1) + "000" + last_id + año.substr(2,4);
$('#NIS').val(NIS);
}
else if (last_id.length==2){
	var NIS= nombre.substr(0,1) + apellido.substr(0,1) + "00" + last_id + año.substr(2,4);
$('#NIS').val(NIS);

}
else if (last_id.length==3){
	var NIS= nombre.substr(0,1) + apellido.substr(0,1) + "0" + last_id + año.substr(2,4);
$('#NIS').val(NIS);

}
else if (last_id.length==3){
	var NIS= nombre.substr(0,1) + apellido.substr(0,1) + last_id + año.substr(2,4);
$('#NIS').val(NIS);

}

}},'json')

});

$('#apellido').keyup(function(){
var nombre= $('#nombre').val().toUpperCase();
var apellido= $('#apellido').val().toUpperCase();
var last_id = "";
var d = new Date();
var año = d.getFullYear().toString();
$.post("../model/clases/ajax.php",{action:"corrnis"},function(data){

for(i= 0; i < data.rows.length;i++){
last_id=data.rows[i]["0"];
if (last_id.length == 1){
	var NIS= nombre.substr(0,1) + apellido.substr(0,1) + "000" + last_id + año.substr(2,4);
$('#NIS').val(NIS);
}
else if (last_id.length==2){
	var NIS= nombre.substr(0,1) + apellido.substr(0,1) + "00" + last_id + año.substr(2,4);
$('#NIS').val(NIS);

}
else if (last_id.length==3){
	var NIS= nombre.substr(0,1) + apellido.substr(0,1) + "0" + last_id + año.substr(2,4);
$('#NIS').val(NIS);

}
else if (last_id.length==3){
	var NIS= nombre.substr(0,1) + apellido.substr(0,1) + last_id + año.substr(2,4);
$('#NIS').val(NIS);

}

}},'json')
//var cadena="<input type='text' name='NIS' id='NIS' placeholder='' class='validate[required] medium form-control'><br>";
//$('#nisp').html(cadena); 
});



});

