$(document).ready(function(){


$('#NIS').ready(function(){
//var nombre= $('#nombre').val().toUpperCase();
//var apellido= $('#apellido').val().toUpperCase();
var nombre="";
var apellido="";
var num_SolicInsc=$('#idI').val();
var d = new Date();
var año = d.getFullYear().toString();
$.post("../../model/clases/ajax.php",{action:"persona",num_SolicInsc:num_SolicInsc},function(data){
	for(i= 0; i < data.rows.length;i++){
		nombre =data.rows[i]["1"].toUpperCase();
		apellido =data.rows[i]["2"].toUpperCase();
	}
	

$.post("../../model/clases/ajax.php",{action:"corrnis"},function(data){
if (data == null){
var NIS= nombre.substr(0,1) + apellido.substr(0,1) + "0001" +año.substr(2,4);
}else{
for(i= 0; i < data.rows.length;i++){
last_id=data.rows[i]["0"];
last_id= parseInt(last_id.substr(2,4))+1;
if (last_id.toString().length == 1){
	var NIS= nombre.substr(0,1) + apellido.substr(0,1) + "000" + last_id + año.substr(2,4);
$('#NIS').val(NIS);
}/*
else if (last_id.length==2){
	var NIS= nombre.substr(0,1) + apellido.substr(0,1) + "00" + last_id + año.substr(2,4);
$('#NIS').val(NIS);

}
else if (last_id.length==3){
	var NIS= nombre.substr(0,1) + apellido.substr(0,1) + "0" + last_id + año.substr(2,4);
$('#NIS').val(NIS);

}
else if (last_id.length==4){
	var NIS= nombre.substr(0,1) + apellido.substr(0,1) + last_id + año.substr(2,4);
$('#NIS').val(NIS);

}*/
}
}},'json')

},'json')

});

/*
$('#apellido').keyup(function(){
var nombre= $('#nombre').val().toUpperCase();
var apellido= $('#apellido').val().toUpperCase();
var last_id = "";
var d = new Date();
var año = d.getFullYear().toString();
$.post("../model/clases/ajax.php",{action:"corrnis"},function(data){
if (data == null){
var NIS= nombre.substr(0,1) + apellido.substr(0,1) + "0001" +año.substr(2,4);
$('#NIS').val(NIS);
}else{
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
}
}},'json')
//var cadena="<input type='text' name='NIS' id='NIS' placeholder='' class='validate[required] medium form-control'><br>";
//$('#nisp').html(cadena); 
});

*/

});

