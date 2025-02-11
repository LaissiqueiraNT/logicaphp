<?php
$frutas = ["Maça","Banana", "Laranja","Abacaxi","Uva"];
echo "-----------------------------------------------------------------------------------<br><h1>Mostra o Array</h1><br>";
foreach ($frutas as $fruta){
    echo $fruta . "<br><br>";
}
echo "-----------------------------------------------------------------------------------<br><h1>Adiciona Morango</h1><br>";
$frutas[] = "Morango";

foreach ($frutas as $fruta){
    echo $fruta . "<br><br>";
}

echo "-----------------------------------------------------------------------------------<br><h1>Remove o 00</h1><br>";

array_shift($frutas); 
//Remove o primeiro elemento

foreach ($frutas as $fruta){
    echo $fruta . "<br><br>";
}

echo "-----------------------------------------------------------------------------------<br><h1>Remove o 02</h1><br>";

unset($frutas[2]);


foreach ($frutas as $fruta){
    echo $fruta . "<br><br>";
}

echo "-----------------------------------------------------------------------------------<br><h1></h1><br>";