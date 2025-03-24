<?php

$alunos = [
    'aluno1'=>[
        'Matemática'=> [
            '1º Bimestre: '=> 7,
            '2º Bimestre: '=> 8,
            '3º Bimestre: '=> 9,
            '4º Bimestre: '=> 7
        ],
        'Ciências'=> [
            '1º Bimestre: '=> 4,
            '2º Bimestre: '=> 6,
            '3º Bimestre: '=> 7,
            '4º Bimestre: '=> 5
        ],
        'Português'=> [
            '1º Bimestre: '=> 5,
            '2º Bimestre: '=> 7,
            '3º Bimestre: '=> 6,
            '4º Bimestre: '=> 8
        ]
        ],
    'aluno2'=>[
        'Matemática'=> [
            '1º Bimestre: '=> 4,
            '2º Bimestre: '=> 2,
            '3º Bimestre: '=> 6,
            '4º Bimestre: '=> 8
        ],
        'Ciências'=> [
            '1º Bimestre: '=> 4,
            '2º Bimestre: '=> 6,
            '3º Bimestre: '=> 9,
            '4º Bimestre: '=> 10
        ],
        'Português'=> [
            '1º Bimestre: '=> 7,
            '2º Bimestre: '=> 5,
            '3º Bimestre: '=> 8,
            '4º Bimestre: '=> 6
        ]
        ],
        'aluno3'=>[
        'Matemática'=> [
            '1º Bimestre: '=> 3,
            '2º Bimestre: '=> 4,
            '3º Bimestre: '=> 7,
            '4º Bimestre: '=> 3
        ],
        'Ciências'=> [
            '1º Bimestre: '=> 6,
            '2º Bimestre: '=> 7,
            '3º Bimestre: '=> 9,
            '4º Bimestre: '=> 6
        ],
        'Português'=> [
            '1º Bimestre: '=> 8,
            '2º Bimestre: '=> 6,
            '3º Bimestre: '=> 9,
            '4º Bimestre: '=> 4
        ]
        ],
        'aluno3'=>[
        'Matemática'=> [
            '1º Bimestre: '=> 8,
            '2º Bimestre: '=> 6,
            '3º Bimestre: '=> 5,
            '4º Bimestre: '=> 9
        ],
        'Ciências'=> [
            '1º Bimestre: '=> 5,
            '2º Bimestre: '=> 9,
            '3º Bimestre: '=> 7,
            '4º Bimestre: '=> 5
        ],
        'Português'=> [
            '1º Bimestre: '=> 9,
            '2º Bimestre: '=> 6,
            '3º Bimestre: '=> 8,
            '4º Bimestre: '=> 10
        ]
        ],
        'aluno4'=>[
        'Matemática'=> [
            '1º Bimestre: '=> 4,
            '2º Bimestre: '=> 2,
            '3º Bimestre: '=> 6,
            '4º Bimestre: '=> 8
        ],
        'Ciências'=> [
            '1º Bimestre: '=> 4,
            '2º Bimestre: '=> 6,
            '3º Bimestre: '=> 9,
            '4º Bimestre: '=> 10
        ],
        'Português'=> [
            '1º Bimestre: '=> 7,
            '2º Bimestre: '=> 5,
            '3º Bimestre: '=> 8,
            '4º Bimestre: '=> 6
        ]
        ],
'aluno5'=>[
        'Matemática'=> [
            '1º Bimestre: '=> 3,
            '2º Bimestre: '=> 4,
            '3º Bimestre: '=> 7,
            '4º Bimestre: '=> 3
        ],
        'Ciências'=> [
            '1º Bimestre: '=> 6,
            '2º Bimestre: '=> 7,
            '3º Bimestre: '=> 9,
            '4º Bimestre: '=> 6
        ],
        'Português'=> [
            '1º Bimestre: '=> 8,
            '2º Bimestre: '=> 6,
            '3º Bimestre: '=> 9,
            '4º Bimestre: '=> 4
        ]
        ]
        ];
        foreach ($alunos as $aluno => $materias) {
            echo '<br>' . ucfirst($aluno) . '<br><br>';
            $soma_aluno = 0; 
            $total_bimestres = 0; 
        
            foreach ($materias as $materia => $notas) {
                echo "Matéria: $materia<br>";
                $soma_materia = 0;
                $total_bimestres = count($notas);
        
                foreach ($notas as $bimestre => $nota) {
                    echo "$bimestre $nota<br>";
                    $soma_materia += $nota; 
                    $soma_aluno += $nota;
                }
        
                $media_materia = $soma_materia / $total_bimestres;
                echo "Soma das notas de $materia: $soma_materia<br>";
                echo "Média de $materia: $media_materia<br><br>";
            }
        
            $media_aluno = $soma_aluno / ($total_bimestres * count($materias));
            echo "Soma total das notas do aluno: $soma_aluno<br>";
            echo "Média do aluno: $media_aluno<br><br>";
        }