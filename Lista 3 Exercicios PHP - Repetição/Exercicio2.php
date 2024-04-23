<?php
// Declarando a matriz de 20 números
$nums = [];

// Preenchendo a matriz com uma estrutura de repetição for
for ($i = 0; $i < 50; $i++) {
    $nums[] = $i;
}


for ($i = 0; $i < 50; $i++) {
    if ($nums[$i] % 2 != 0){
        echo " " .$nums[$i];
    }
}



?>