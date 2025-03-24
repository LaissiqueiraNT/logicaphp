<?php
$numeros = [15,10,35,20,18,30,5,60,45,40];

echo "Ordem original". "<br>";
$num_seq = implode($numeros);
echo $num_seq;
echo "<br><br>Ordem crescente". "<br>";
sort($numeros);
$num_order = implode(",", $numeros);
echo $num_order;

echo "<br><br>Ordem decrescente". "<br>";
rsort($numeros);
$num_order_dec = implode(",", $numeros);
echo $num_order_dec;
