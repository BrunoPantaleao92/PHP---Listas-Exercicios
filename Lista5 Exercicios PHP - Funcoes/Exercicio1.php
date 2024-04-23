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
    <label >Digite um número: </label>
    <input name="num1" type="texto">

    <label >Digite um número: </label>
    <input name="num2" type="texto">

    <label >Digite um número: </label>
    <input name="num3" type="texto">

    <button type = "submit"> Enviar</button>
</form>

<?php

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

    function somar($num1, $num2, $num3){

        $soma = $num1 + $num2 + $num3;

        echo "<li> {$num1} + {$num2} + {$num3} = {$soma}";
        
    }

    somar($num1, $num2, $num3);
?>
</body>
</html>