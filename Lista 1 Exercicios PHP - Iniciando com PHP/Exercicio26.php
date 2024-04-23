<?php

//Escreva um algoritmo que receba de entrada a distância total (em km)percorrida por um automóvel e a quantidade de combustível (em litros)consumida para percorrê-la, calcule e imprima o consumo médio decombustível. Fórmula: Consumo médio = Km / litros

$distancia_total_km = 50;
$litros_consumidos = 4.5;

echo "O consumo médio do veiculo para percorer {$distancia_total_km}km é: " . number_format(($distancia_total_km / $litros_consumidos), 2, ',', '.') . " km/por litro";

?>