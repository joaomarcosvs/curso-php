<div class="titulo">Variaveis variaveis</div>

<?php
$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a} ${$a} $valorA";

echo '<br>';
$epa = 'opa';
$opa = 'vish';
echo '<br>';
echo "$epa {$$epa}"; // as duas linhas são a mesma coisa, interpolação!!!
echo '<br>';
echo "$epa {$opa}";
echo '<br>';
