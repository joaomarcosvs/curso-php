<div class="titulo">Operações</div>

<?php

$dados1 = [
    "nome" => "Joao",
    "idade" => 19

];

$dados2 = [
    "naturalidade" => "Terra de Areia",

];

$dados = $dados1 + $dados2;

print_r($dados);