<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio3</title>
</head>
<!-- Faça um Programa que verifique se uma letra digitada é "F" ou "M". Conforme a letra escrever: F - Feminino, M - Masculino, Sexo Inválido -->
<body>
<form action = "" method="GET">
    <label >Digite uma letra: </label>
    <input name="letra" type="text">

    <button type = "submit"> Enviar</button>
</form>



<?php
$letra = $_GET['letra'];


$letra = strtoupper($letra);


    switch ($letra) {
        case 'F':
            echo "<p> Feminino </p>";
            break;
            
        case 'M':
            echo "<p> Masculino </p>";
            break;
        
        default:
            echo "<p>Sexo invalido</p>";
            break;
        }

?>
</body>
</html>