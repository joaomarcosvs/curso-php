<div class="titulo">Valor vs Referencia</div>

<?php

// Por Valor

$var = 'valor literal';
echo "<br>$var";

$varValor = $var;
echo "<br>$var";

$varValor = 'novo valor';
echo "<br>$varValor";

// Referencia  --  funciona parecido com o ponteiro

$varReferencia = &$var; // var referenca recebe o endereço de var, então tudo que eu mudar em var refencia será mudado para va
$varReferencia = 'mesma referencia'; 

echo "<br>$var";
echo "<br>$varReferencia";
