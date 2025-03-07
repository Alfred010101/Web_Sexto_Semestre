function init(){
    document.getElementById("tarjeta").style.display = "block"
    document.getElementById("formulario").style.display = "none"
    document.getElementById("datos").style.display = "none"
}

function paso_1(){
    document.getElementById("tarjeta").style.display = "none"
    document.getElementById("formulario").style.display = "block"
    document.getElementById("datos").style.display = "none"
}

function paso_2(){
    document.getElementById("tarjeta").style.display = "none"
    document.getElementById("formulario").style.display = "none"
    document.getElementById("datos").style.display = "block"
}

init();