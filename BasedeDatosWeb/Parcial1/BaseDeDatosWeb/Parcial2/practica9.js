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


    cargarCartas();

    function cargarCartas(){
        var carta1 = 0;
        var carta2 = 0;
        let asignadas = new Array(54).fill(false);

        while(carta1 < 16){
            var num = Math.floor(Math.random()*54) + 1;
            if(asignadas[num-1] == false){
                $("#carta1").append("<div class='col-sm-3'><img class='img-fluid' src='imagenes/"+num+".jpeg'></div>");
                asignadas[num-1] = true;
                carta1++;
            } else {
                continue;
            }
        }

        asignadas = new Array(54).fill(false);

        while(carta1 < 16){
            var num = Math.floor(Math.random()*54) + 1;
            if(asignadas[num-1] == false){
                $("#carta2").append("<div class='col-sm-3'><img class='img-fluid' src='imagenes/"+num+".jpeg'></div>");
                asignadas[num-1] = true;
                carta2++;
            } else {
                continue;
            }
        }
    }
});