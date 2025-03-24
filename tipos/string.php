<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string!', '<br>';
var_dump("Eu também!");
echo "<br>";
var_dump("Eu tambem!"); //acentos importar
echo "<br>";

echo '<p> Concatenação</p>';

echo 'Nós também ' . 'somos!';
echo '<br>', 'Também aceito ', 'virgulas'; //Mas este não é um jeito valido de concatenção!
echo '<br>';

echo '"teste"' . "' teste'", '<br>';

echo "\n" . ' Quebra de linha!';
echo '<br>';
echo "\t" .  ' Tab';
echo '<br>';

print ("<br> Também existe o metodo print!");
print "<br> Também existe o metodo print, sem os parenteses!";


echo '<p> Funções </p>';

echo '<br>' . strtoupper('maisculas');
echo '<br>' . strtolower('MINUSCULAS');
echo '<br>' . ucfirst('Somente a primeira');
echo '<br>' . ucwords('todas as pelasvras com maiusculas no começo');
echo '<br>' . strlen("Quantas letras");
//echo '<br>' . mb_strlen("Eu também", "utf-8"); // sem contar o acento
