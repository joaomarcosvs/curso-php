<div class="titulo">Basico de Array</div>

<?php
//indice       0, 1,  2,    3,     
$lista = array(1, 2, 3.4, "texto");

echo $lista . '<br>'; // irá imprimir 'Array'
var_dump($lista);

echo '<br>';

print_r($lista); // Imprimi todos os itens, mas de um jeito mais "bonito"
echo '<br>' . $lista[0]; // Acessei apenas o primeiro intem da lista
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>' . $lista[50]; // Não retorna erro porque será null

$texto = 'Esse é um texto de teste';

echo $texto[11] . '<br>'; //vai dar um problema na contagem por conta do acento

echo '<br>' . mb_substr($texto, 11, 11);