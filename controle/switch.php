<div class="titulo">Switch</div>

<?php

$categoria = 'luxo';
$preco = 0.0;
$carro = '';

switch (strtolower($categoria)) {

    case 'luxo':
        $carro = 'Mercedes';
        $preco = 500000;
    break;

    case 'suv':
        $carro = 'Renegade';
        $preco = 170000;
    break;

    case 'sedan':
        $carro = 'Etios';
        $preco = 100000;
    break;

    default :
        $carro = 'Mobi';
        $preco = 60000;
    break;
}

$precoFormatado = number_format($preco,2,',','.');
echo "<p>Carro: $carro<br>Preço: $precoFormatado";