<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio4</title>
</head>

<body>
<form action = "" method="GET">
    <label >Digite um número: </label>
    <input name="num1" type="text">

    <form action = "" method="GET">
    <label >Digite um número: </label>
    <input name="num2" type="text">

    <button type = "submit"> Enviar</button>
</form>



<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

echo "<br><br>";

$soma = 0;

if ($num1 < $num2){

    for($i = 0; $num1 <= $num2; $i++ ){
        echo " " . $num1;

        $soma = $soma + $num1;

        $num1++;

    }
}
else{
    for($i = 0; $num2 <= $num1; $i++ ){
        echo " " . $num2;

        $soma = $soma + $num2;

        $num2++;
    }
}

echo "<br> Soma: " . $soma




?>
</body>
</html>