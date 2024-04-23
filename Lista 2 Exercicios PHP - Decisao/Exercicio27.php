<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação de Participação</title>
</head>
<!-- 27. Faça um programa que faça 5 perguntas para uma pessoa sobre um crime. As
perguntas são:
a. "Telefonou para a vítima?"
b. "Esteve no local do crime?"
c. "Mora perto da vítima?"
d. "Devia para a vítima?"
e. "Já trabalhou com a vítima?" O programa deve no final emitir uma
classificação sobre a participação da pessoa no crime. Se a pessoa
responder positivamente a 2 questões ela deve ser classificada como
"Suspeita", entre 3 e 4 como "Cúmplice" e 5 como "Assassino". Caso
contrário, ele será classificado como "Inocente". -->
<body>

    <div>
        <h2>Classificação de Participação</h2>
        <form action="" method="GET">
            <label>Telefonou para a vítima? (Responda 'sim' ou 'não'): </label>
            <input type="text" name="telefonou" required><br>

            <label>Esteve no local do crime? (Responda 'sim' ou 'não'): </label>
            <input type="text" name="esteve_local" required><br>

            <label>Mora perto da vítima? (Responda 'sim' ou 'não'): </label>
            <input type="text" name="mora_perto" required><br>

            <label>Devia para a vítima? (Responda 'sim' ou 'não'): </label>
            <input type="text" name="devia_vitima" required><br>

            <label>Já trabalhou com a vítima? (Responda 'sim' ou 'não'): </label>
            <input type="text" name="trabalhou_vitima" required><br>

            <button type="submit">Classificar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $respostas = [
                strtolower($_GET['telefonou']),
                strtolower($_GET['esteve_local']),
                strtolower($_GET['mora_perto']),
                strtolower($_GET['devia_vitima']),
                strtolower($_GET['trabalhou_vitima'])
            ];

            $positivas = 0;

            foreach ($respostas as $resposta) {
                if ($resposta == 'sim') {
                    $positivas++;
                }
            }

            if ($positivas == 2) {
                $classificacao = "Suspeita";
            } elseif ($positivas >= 3 && $positivas <= 4) {
                $classificacao = "Cúmplice";
            } elseif ($positivas == 5) {
                $classificacao = "Assassino";
            } else {
                $classificacao = "Inocente";
            }

            echo "<p>Classificação da participação: $classificacao</p>";
        }
        ?>

    </div>

</body>

</html>