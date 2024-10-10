$(document).ready(function(){
    cartas = new Array(54).fill(false);
    //Función click del boton dar carta
    $("#dar_carta").click(function(){
        var b = true;
        var num = Math.floor(Math.random()*54) + 1;
        console.log("Numero de carta ="+num);
        while(b){
            if(cartas[num-1] == true){
            
            }else{
                $("#carta_activa").html("<img src='imagenes/"+num+".jpeg'>");
                cartas[num-1] = true;
                b=false;
                cont ++;
            }
            if(cont == 54){
                console.log("ya se dieron todas las cartas");
                b=false;
            }
        }
    });
});