<div class="titulo">Mapa</div>

<?php

// mapa é como a struct em c
$dados = array(
    "idade" => 19, //isso é uma chave
    "olhos" => "verde",
    "peso" => 82.4
    // chave não tem indice
);

print_r($dados);
echo "<br>";
var_dump($dados[0]);
echo "<br>" . $dados["idade"];
echo "<br>" . $dados["olhos"];
echo "<br>" . $dados["peso"];

// para adicionar elementos na lista

$dados[] = "i";
print_r($dados);


