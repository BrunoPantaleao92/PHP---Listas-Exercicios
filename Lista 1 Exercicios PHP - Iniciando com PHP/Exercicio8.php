<?php

/*Faça um script que peça a temperatura em graus Fahrenheit, transforme e
mostre a temperatura em graus Celsius. C = (5 * (F-32) / 9)*/

$fahr = 84;

echo "a temperatura é " . number_format((5 * ($fahr - 32) / 9), 2);