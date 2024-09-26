console.log("Funciona JS")

var cambio = false;

function cambiar_color(){
    if(cambio){
        document.getElementById("cuadro").style.backgroundColor = 'white';
        cambio = false;
    }else{
        document.getElementById("cuadro").style.backgroundColor = 'blue';
        cambio = true;
    }
}

function ocultar(){
    document.getElementById("titulo").style.display = 'none';
    document.getElementById("titulo").style.fontsize = '62px';
}

function mostrar(){
    document.getElementById("titulo").style.display = '';
}