<?php

//Escreva um algoritmo que receba o valor de um produto e calcule um desconto de 7%, exibindo para o usuário o valor original, o valor do desconto e o valor com o desconto.

$valor = 500;

echo "O valor total é: " . $valor;
echo "<br>O desconto de 7% é: " . ($valor * 0.07);
echo "<br>O valor com esse desconto é: " . ($valor - ($valor * 0.07));


?>