
function confirmacion(confirma) {
    if (confirm("Esta seguro que desea ir a Mantenimiento de "+ confirma ) == true) {
        if (confirma === 'banco') {
    document.location.href = "http://localhost/asi2/ASI2-G1-E1-022014/asi/mantenimiento/manBanco.html"
        }else if (confirma === 'usuario'){
            document.location.href = "http://localhost/asi2/ASI2-G1-E1-022014/asi/html/expediente.html"
        }else if (confirma === 'perfil'){
            document.location.href = "http://localhost/asi2/ASI2-G1-E1-022014/asi/html/index_miembro.html"
        }
    }
}
