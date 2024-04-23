<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seletor de Cor</title>
</head>
<body>

<form action = "" method="GET">
    <label >Defina a cor: </label>
    <input name="cor" type="color">

    <button type = "submit"> Enviar</button>

</form>

    <?php
    $cor = $_GET['cor'];
    

    echo"
    <style> body
    {
    background-color: {$cor};
    }
    </style>"

    ?>

</body>
</html>

