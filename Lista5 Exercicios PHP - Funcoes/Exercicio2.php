<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio1</title>
</head>
<!-- Faça um Programa que peça um valor e mostre na tela se o valor é positivo ounegativo. -->
<body>
<form action = "" method="GET">
    <label >Dia: </label>
    <input name="dia" type="texto">

    <label >Mês: </label>
    <input name="mes" type="texto">

    <label >Ano: </label>
    <input name="ano" type="texto">

    <button type = "submit"> Enviar</button>
</form>

<?php

    $dia = $_GET['dia'];
    $mes = $_GET['mes'];
    $ano = $_GET['ano'];

    function data($dia, $mes, $ano){

        if($mes = 01){
        echo "Dia {$dia} de janeiro de {$ano}";
        }
        else if($mes = 02){
            echo "Dia {$dia} de fevereiro de {$ano}";
        }
        else if($mes = 03){
            echo "Dia {$dia} de março de {$ano}";
        }
        else if($mes = 04){
            echo "Dia {$dia} de abril de {$ano}";
        }
        else if($mes = 05){
            echo "Dia {$dia} de maio de {$ano}";
        }
        else if($mes = 06){
            echo "Dia {$dia} de junho de {$ano}";
        }
        else if($mes = 07){
            echo "Dia {$dia} de julho de {$ano}";
        }
        else if($mes = 08){
            echo "Dia {$dia} de agosto de {$ano}";
        }
        else if($mes = 09){
            echo "Dia {$dia} de setembro de {$ano}";
        }
        else if($mes = 10){
            echo "Dia {$dia} de outubro de {$ano}";
        }
        else if($mes = 11){
            echo "Dia {$dia} de novembro de {$ano}";
        }
        else if($mes = 12){
            echo "Dia {$dia} de dezembro de {$ano}";
        }
    }
    
echo "<br><br>";

data($dia, $mes, $ano);

?>
</body>
</html>