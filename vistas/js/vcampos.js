function mostrarReferencia(){
    if (document.formRegistro.regSeleccion[1].checked == true) {
        document.getElementById('llenadoNut').style.display='block';
    } else {
        document.getElementById('llenadoNut').style.display='none';
    }
}