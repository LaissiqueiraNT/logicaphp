<?php

$taxad = [
    "dolar" => 5.10,
    "euro" => 5.50,
    "libra" => 6.30,
    "argentino" => 0.05
];
$real = 100;
echo "Valor em Dolar: ". number_format($real / $taxas['dolar'], 2, ",","."). "<br>";