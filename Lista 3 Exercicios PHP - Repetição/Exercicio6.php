<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio6</title>
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

$fibonacci = 1;
$anterior = $fibonacci;
$anterior2 = $anterior;


if($num == 1){
    echo "<br>1";
}
else if($num == 2){
    echo "<br>1<br>1";
}
else if($num >= 3){
    echo "<br>1<br>1";
    
    for($i = 0; $i < $num ; $i++ ){

            $anterior2 = $anterior;
            $anterior = $fibonacci;

            $fibonacci = $anterior2 + $anterior;

            echo "<br>" . $fibonacci;
        }
    }


?>
</body>
</html>