<?php

/*Faça um script que peça a temperatura em graus Celsius, transforme e
mostre em graus Fahrenheit.*/

$celcius = 28.89;

echo "a temperatura é " . number_format(((($celcius * 9) / 5) + 32), 2);