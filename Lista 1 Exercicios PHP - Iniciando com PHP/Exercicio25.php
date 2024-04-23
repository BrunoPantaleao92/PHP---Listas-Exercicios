<?php

//Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor, divida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total da compra.


$valor = 100;






echo "O valor do produto é: " . $valor;

echo "<br>O valor do produto com acrescimo de 16% é: " . $valor + ($valor * 0.16);


echo "<br>O valor da parcela em 10x é de: " . ($valor + ($valor * 0.16)) / 10;

?>