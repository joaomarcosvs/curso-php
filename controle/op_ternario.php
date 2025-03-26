<div class="titulo">Operador Ternario</div>

<?php
$idade = 70;
$status;

if($idade >= 18){
    $status = 'Maior de idade!';
} else {
    $status = 'Menor de idade!';
}

echo "$status <br>";

// Agora usando o Operador ternario:

//         expressão     oq será feito se v    oq será feito se f
$status = $idade >= 18 ? 'Maior de Idade!' : 'Menor de idade!';
