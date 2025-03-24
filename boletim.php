<?php

$aluno= [
'nome'=> 'Lucas',
'materia'=>'Ingles',
'notas' => 5
],
[
'nome'=> 'Lais',
'materia'=>'Ingles',
'notas' => 2
]

if($aluno['nota'] >= 7){
    echo "Aluno aprovado";
}elseif($aluno['nota'] < 7 && $aluno['nota'] > 5){
    echo "Aluno em recuperação";
}else{
    echo "Aluno Reprovado";
}