<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio1</title>
</head>



<body>
<form action = "" method="GET">
    <label >Digite o primeiro número: </label>
    <input name="num1" type="int">

    <label >Digite o segundo número: </label>
    <input name="num2" type="int">

    <button type = "submit"> Enviar</button>
</form>

<?php
//Faça um Programa que peça dois números e imprima o maior deles.

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

    if($num1 == $num2){
        echo "<p> Os números digitados são iguais </p>";
    } else if ($num1 > $num2){
        echo "<p> O número {$num1} é maior</p>";
    }
    else{
        echo "<p>  O número {$num2} é maior</p>";
    }



?>

</body>