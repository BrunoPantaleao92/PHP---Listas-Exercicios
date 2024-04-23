<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio4</title>
</head>
<!-- Faça um Programa que verifique se uma letra digitada é vogal ou consoante. -->
<body>
<form action = "" method="GET">
    <label >Digite uma letra: </label>
    <input name="letra" type="text">

    <button type = "submit"> Enviar</button>
</form>


<?php
$letra = $_GET['letra'];


$letra = strtoupper($letra);


if ($letra == 'A' || $letra == 'E' || $letra == 'I' || $letra == 'O' || $letra == 'U')
{
echo "Vogal";
}

else
{
echo "Consoante";   
}

?>
</body>
</html>