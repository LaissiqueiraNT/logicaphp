<?php
$dados= [
    'nome'=> 'Luiz',
    'nasc' => '14/05/2010',
    'documentos'=> [
        'ID'=> '1',
        'CPF'=>'32.867.432-78',
        'CNH'=>'63265874358'
    ],
    'endereco' => [
        'tipo'=>'casa',
        'logradouro'=>'Rua ',
        'num'=>'802',
        'complemento'=>'Padaria do seu zé',
        'bairro'=>'Maria das dores',
        'cidade' => 'valenca',
        'UF' =>'RJ',
        'CEP'=> '27600742'
    ],
    'filiacao'=> [
        'nomepai'=>'Ricardo',
        'nomemae'=> 'Helena'
    ],
    'contatos'=> [
        'celular'=> '24780453267',
        'fixo'=>'2424538954',
        'email'=> 'luizao@gmail.com'
    ]
]
foreach($dados['contatos'] as $contato => $value){
    echo $contato . $value . "<br>";
}