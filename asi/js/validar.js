$(document).ready(function(){


$('#Guardar').click(function(){
if($('#nomGrupo').val().substr(0,1) == " " || $('#nomGrupo').val().substr(0,1) == "" ) { alert('Debes escribir el nombre de grupo') ; return false ; } 
if($('#LugarFundacion').val().substr(0,1) == " " || $('#LugarFundacion').val().substr(0,1) == "" ) { alert('Debes escribir el lugar de fundación') ; return false ; }
if($('#lugarReunion').val().substr(0,1) == " " || $('#lugarReunion').val().substr(0,1) == "" ) { alert('Debes escribir el lugar de reunión') ; return false ; }
if($('#propLugar').val().substr(0,1) == " " || $('#propLugar').val().substr(0,1) == "" ) { alert('Debes escribir el propietario del lugar') ; return false ; }
if($('#calle').val().substr(0,1) == " " || $('#calle').val().substr(0,1) == "" ) { alert('Debes escribir la calle') ; return false ; }
if($('#colonia').val().substr(0,1) == " " || $('#colonia').val().substr(0,1) == "" ) { alert('Debes escribir la colonia') ; return false ; }
if($('#nomGrupo').val().substr(0,1) == " " || $('#nomGrupo').val().substr(0,1) == "" ) { alert('Debes escribir el nombre de grupo') ; return false ; } 
// if($('#nomGrupo').val().substr(0,1) == " " || $('#nomGrupo').val().substr(0,1) == "" ) { alert('Debes escribir el nombre de grupo') ; return false ; } 
// if($('#nomGrupo').val().substr(0,1) == " " || $('#nomGrupo').val().substr(0,1) == "" ) { alert('Debes escribir el nombre de grupo') ; return false ; } 
// if($('#LugarFundacion').val() == "") { alert('Debes poner el lugar de fundacion') ; return false ; } 
// if($('#lugarReunion').val() == "") { alert('Debes poner el lugar de reunion') ; return false ; } 

});






});
