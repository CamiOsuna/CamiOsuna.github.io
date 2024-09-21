<?php

    $aciertos = 0;
    $pregunta1 = $_POST["pregunta1"];
    $pregunta2 = $_POST["pregunta2"];
    $pregunta3 = $_POST["pregunta3"];

    //valida pregunta 1 1. ¿Cuál es el poder especial de Jasper?
    echo "<h3> ¿Cuál es el poder especial de Jasper? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta1." ---- Correcta = Controlar emociones</h5>";
    if($pregunta1 == "Predecir el futuro"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    //Valido pregunta 2 s se imprime en Renesmee Cullen
    if(strtoupper($pregunta2) == "Jacob"){
        $aciertos++;
    }

    //Pregunta 3 - se deben validar 2 opciones Es un escudo de protección y Super Velocidad
    $p3_respuestas_correctas = 0;

    if(count($pregunta3) == 2){
        for($i=0; $i<count($pregunta3); $i++){
            if($pregunta3[$i] == "Es un escudo de protección" || $pregunta3[$i] == "Super Velocidad"){
                $p3_respuestas_correctas ++;
            }
        }
        if($p3_respuestas_correctas == 2){
            $aciertos++;
        }
    }
    //valida pregunta 4 4. ¿Cuál es el poder especial de Alice?
    echo "<h3> ¿Cuál es el poder especial de Alice? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta4." ---- Correcta = Ver el futuro</h5>";
    if($pregunta4 == "Torturar con la mirada"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    //valida pregunta 5 5. ¿Cuál es el poder especial de Edward?
    echo "<h3> ¿Cuál es el poder especial de Edward? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta5." ---- Correcta = Leer la mente</h5>";
    if($pregunta5 == "Torturar con la mirada"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    //Valido pregunta 6 s Tiene superfuerza
    if(strtoupper($pregunta6) == "Emmett"){
        $aciertos++;
    }

    //Valido pregunta 7 s Tiene 4 hermanos adoptivos
    if(strtoupper($pregunta7) == "Edward"){
        $aciertos++;
    }

    //Pregunta 8 - se deben validar 2 opciones Rosalie y Alice
    $p8_respuestas_correctas = 0;

    if(count($pregunta8) == 2){
        for($i=0; $i<count($pregunta8); $i++){
            if($pregunta8[$i] == "Rosalie" || $pregunta8[$i] == "Alice"){
                $p8_respuestas_correctas ++;
            }
        }
        if($p8_respuestas_correctas == 2){
            $aciertos++;
        }
    }

       //Pregunta 9 - se deben validar 2 opciones Emmett y Jasper
       $p9_respuestas_correctas = 0;

       if(count($pregunta9) == 2){
           for($i=0; $i<count($pregunta9); $i++){
               if($pregunta9[$i] == "Emmett" || $pregunta9[$i] == "Jasper"){
                   $p9_respuestas_correctas ++;
               }
           }
           if($p9_respuestas_correctas == 2){
               $aciertos++;
           }
       }

     //Valido pregunta 10 s Es la figura materna de la familia Cullen
     if(strtoupper($pregunta10) == "Esme"){
        $aciertos++;
    }



 
    
    echo "CALIFICACIÓN FINAl = " . ($aciertos * 10) . "%";

?>