<?php
$dados= [
    'Pessoa'=>
    [
    'Nome: '=> 'Luiz',
    'Nascimento: ' => '14/05/2010'
    ],
    'documentos'=> [
        'ID: '=> '1',
        'CPF: '=>'32.867.432-78',
        'CNH: '=>'63265874358'
    ],
    'endereco' => [
        'Tipo: '=>'Casa',
        'Logradouro: '=>'Rua ',
        'Num: '=>'802',
        'Complemento: '=>'Padaria do seu zé',
        'Bairro: '=>'Maria das dores',
        'Cidade: ' => 'Valença',
        'UF: ' =>'RJ',
        'CEP: '=> '27600742'
    ],
    'filiacao'=> [
        'Nome pai: '=>'Ricardo',
        'Nome mãe: '=> 'Helena'
    ],
    'contatos'=> [
        'Celular: '=> '24780453267',
        'Fixo: '=>'2424538954',
        'Email: '=> 'luizao@gmail.com'
    ]
];
foreach($dados['Pessoa'] as $pessoa => $value){
    echo $pessoa . $value . "<br>";
}
foreach($dados['documentos'] as $documento => $value){
    echo $documento . $value . "<br>";
}
echo "<br>";
foreach($dados['endereco'] as $enderec => $value){
         echo $enderec . $value . "<br>";
     }
echo "<br>";
     foreach($dados['filiacao'] as $filiaca => $value){
        echo $filiaca . $value . "<br>";
    }
    echo "<br>";
foreach($dados['contatos'] as $contato => $value){
    echo $contato . $value . "<br>";
}