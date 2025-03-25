<div class="titulo">Básico</div>

<?php

$numeroA = 13; //Para declarar variaveis usasse o $
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma .'<br>';

echo isset($soma); // 1 para sim

$variavel = 10;
echo '<br>' . $variavel;
$variavel = 'Agora sou uma string';
echo '<br>' . $variavel;

//Nomes de variável

$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vár5 = 'valida'; //não usar acentos
//$6var = 'invalido';

// Variáveis pré definidas

echo '<br>' . $_SERVER;
var_dump($_SERVER["HTTP_HOST"]);
