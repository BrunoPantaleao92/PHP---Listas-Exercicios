<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso</title>
</head>
<body>
    <h1>Cadastro realizado com sucesso!</h1>
    <?php 
    
        $nome = $_GET["nome"];
        echo "<br><p1>Nome: {$nome} </p1>";

        $email = $_GET["email"];
        echo "<br><p1>E-mail: {$email} </p1>";

        // echo print_r($_GET);
        $senha = $_GET["senha"];
        echo "<br><p1>Senha: {$senha}</p1>"

    ?>


</body>
</html>
