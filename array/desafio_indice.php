<div class="titulo">Desafio Index</div>

<?php

$lista = array(
    1,          // 0 > 1
    4 => 2,     // 4 > 2
    3 => 3,     // 3 > 3
    'a' => 4,   // a > 4
    5,          // 5 > 5  -- aqui o indice é cinco porque o maior apontado antes foi o 4
    '9' => 6,   // 9 > 6
    '86' => 7,  // 86 > 7  
    0 => 8      // 0 > 8  -- aqui ele muda o valor do indice zero, que antes era 1
);

print_r($lista);