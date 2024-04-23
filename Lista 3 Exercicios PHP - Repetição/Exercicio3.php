<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio3</title>
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

if ($num1 < $num2){

    for($i = 0; $num1 <= $num2; $i++ ){
        echo " " . $num1;
        $num1++;
    }
}
else{
    for($i = 0; $num2 <= $num1; $i++ ){
        echo " " . $num2;
        $num2++;
    }
}





?>
</body>
</html>