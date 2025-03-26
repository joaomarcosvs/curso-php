<div class="titulo">Operadores Relacionais</div>

<?php

var_dump( 1 == 1); //igual
echo '<br>';
var_dump( 1 > 1); // maior que
echo '<br>';
var_dump( 1 < 1); // menor que
echo '<br>';
var_dump( 1 != 1); //diferente de
echo '<br>';
var_dump( 1 <> 1); //diferente de
echo '<br>';
var_dump(1 == '1');
echo '<br>';
var_dump(11 === '11'); //Sempre que tiver mais de 2 ==, estamos referindo ao estritamente diferente.
echo '<br>';

echo "<p> Relacionais no If Else </p><hr>";

$idade = 19;
if ($idade < 18) {
    echo 'Menor de idade!';
} else if ($idade < 65) {
    echo 'Adulto!';
} else {
    echo 'Terceira idade!';
};

echo "<p> Spaceship </p><hr>";

var_dump(5 <=> 3); // <=> é o spaceship
echo '<br>';
var_dump(5 <=> 3); // Primeiro operador é maior, logo é 1, idependente do quão maior é
echo '<br>';
var_dump(5 <=> 5); // valor igual é 0
echo '<br>';
var_dump(3 <=> 5); // Segundo operador é maior, logo é -1

echo "<p> Valores que podem ser true or false </p><hr>";
// Com dupla negação

var_dump(!!5);

?>

<style>

p{
    margin-bottom: 0px;
}

hr{
    margin-top: 0px;
}

</style>

