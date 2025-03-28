<div class="titulo">Array Multidimencional</div>

<?php

$dados = [
    "pessoa1" =>[
        "nome"=> "Joao",
        "idade"=> 19,
        "naturalidade"=>"Terra de Areia",
    ],
    "pessoa2" =>[
        "nome"=> "Maria",
        "idade"=> 16,
        "naturalidade"=>"Terra de Areia",
    ]
];

print_r($dados);
echo "<br>" . $dados["pessoa1"]["idade"];
echo "<br>" . $dados["pessoa2"]["idade"];