<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio15</title>
</head>
<!-- 15. Faça um Programa que peça os 3 lados de um triângulo. O programa deverá
informar se os valores podem ser um triângulo. Indique, caso os lados formem um
triângulo, se o mesmo é: equilátero, isósceles ou escaleno. Dicas:
a. Três lados formam um triângulo quando a soma de quaisquer dois lados for
maior que o terceiro;
b. Triângulo Equilátero: três lados iguais;
c. Triângulo Isósceles: quaisquer dois lados iguais;
d. Triângulo Escaleno: três lados diferentes; -->
<body>

    <form action="" method="GET">
        <label>Digite o primeiro lado do triângulo: </label>
        <input name="lado1" type="number">

        <label>Digite o segundo lado do triângulo: </label>
        <input name="lado2" type="number">

        <label>Digite o terceiro lado do triângulo: </label>
        <input name="lado3" type="number">

        <button type="submit">Enviar</button>
    </form>

    <?php
    function tipoTriangulo($lado1, $lado2, $lado3)
    {
        if ($lado1 > 0 && $lado2 > 0 && $lado3 > 0) {
            if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
                if ($lado1 == $lado2 && $lado2 == $lado3) {
                    echo "Triângulo Equilátero";
                } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
                    echo "Triângulo Isósceles";
                } else {
                    echo "Triângulo Escaleno";
                }
            } else {
                echo "Os valores não formam um triângulo";
            }
        } else {
            echo "Os valores devem ser maiores que zero";
        }
    }
    $lado1 = $_GET['lado1'];
    $lado2 = $_GET['lado2'];
    $lado3 = $_GET['lado3'];

    tipoTriangulo($lado1, $lado2, $lado3);

    ?>

</body>

</html>