<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio5</title>
</head>

<body>
<form action = "" method="GET">
    <label >Digite um número: </label>
    <input name="num" type="text">

    <button type = "submit"> Enviar</button>
</form>



<?php
$num = $_GET['num'];

echo "<br><br>";

    for($i = 0; $i < 11 ; $i++ ){
        echo "<br>" . $num . " X " . $i . "=" . ($num * $i);
    }



?>
</body>
</html>