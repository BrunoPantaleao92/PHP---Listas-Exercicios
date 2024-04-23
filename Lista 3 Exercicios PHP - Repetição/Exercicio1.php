<?php


// Declarando a matriz de 20 números
$nums = [];

// Preenchendo a matriz com uma estrutura de repetição for
for ($i = 1; $i <= 20; $i++) {
    $nums[] = $i + 5;
}


for ($i = 1; $i < 20; $i++) {
echo " " . $nums[$i];
}

echo "<br><br>#########################<br><br> ";

foreach($nums as $num){
    echo " " . $num;        
}


echo "<br><br>#########################<br><br> ";


foreach($nums as $num){
    echo "<br>" . $num;        
}

?>