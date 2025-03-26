<div class="titulo">Tipo Constante</div>

<?php

define("TAXA_DE_JUROS",5.9); //defeine recebe o nome e valor da const
echo TAXA_DE_JUROS; // const não tem $

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;
 
$valorVar = 2.5;
define( 'NOVISSIMA_TAXA', $valorVar);
const NOVA_TAXAA = 2.8 + 1.2;

echo '<br>'. NOVA_TAXAA;
echo '<br>'. NOVISSIMA_TAXA;

// Constantes pŕe definidas

echo '<br> LInhas: ' . __LINE__;
echo '<br>' . __FILE__;
echo '<br>'. __DIR__;
