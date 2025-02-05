<?php

$nota1 = 10;
$nota2 = 7;
$nota3 = 4;
$nota4 = 6;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if($media =< 7){
    echo  "Reprovado";
} elseif($media <7 && $media >= 5){
echo "vc esta em recuperação com media";
}
  else  {
echo "Aprovado";
}
echo "<br>". $media;


