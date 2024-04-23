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
    <input name="num" type="int">

    <button type = "submit"> Enviar</button>
</form>



<?php
$num1 = $_GET['num'];

    if($num1 == 0){
        echo "<p> Os números digitados são iguais </p>";
    } else if ($num1 > 0){
        echo "<p> O número {$num1} é maior</p>";
    }
    else{
        echo "<p>  O número {$num2} é maior</p>";
    }



?>
</body>
</html>