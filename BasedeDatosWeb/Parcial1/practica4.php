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
    
    echo "CALIFICACIÓN FINAl = " . ($aciertos * 10) . "%";

?>