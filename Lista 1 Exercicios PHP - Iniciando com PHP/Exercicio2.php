<?php
//Escreva um script que pede o raio de um círculo, e em seguida exiba o perímetro e área do círculo. Obs. procure por M_PI.

$raio = 10;

$area = (pi()) * ($raio * $raio);

echo "area: " . $area;

$perimetro = (2 * (pi())) * $raio;

echo "perimetro: " . $perimetro;

?>