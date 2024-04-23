<?php

/*Faça um script que peça 2 números inteiros e um número real. Calcule e
mostre:
a. O produto do dobro do primeiro com metade do segundo.
b. A soma do triplo do primeiro com o terceiro.
c. O terceiro elevado ao cubo.*/

$num1 = 10;
$num2 = 15;
$num3 = 3.5;

echo "O produto do dobro do primeiro com metade do segundo" . (($num1 * 2) * ($num2 / 2)) . "<br>";

echo "A soma do triplo do primeiro com o terceiro." . (($num1 * 3) + $num3) . "<br>";

echo "O terceiro elevado ao cubo" . (pow($num3, 3)) . "<br>";



?>