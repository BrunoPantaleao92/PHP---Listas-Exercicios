<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio7</title>
</head>

<body>
<form action = "" method="GET">
    <label >Digite um número: </label>
    <input name="num" type="text">

    <button type = "submit"> Enviar</button>
</form>



<?php
    $num = $_GET['num'];

if ($num == 0) {
    $num = 1;
    }

    else {
    for($i = $num; $i > 1; $i--){
    $num = $num * ($i - 1);
    }
    }
    echo $num;

?>
</body>
</html>