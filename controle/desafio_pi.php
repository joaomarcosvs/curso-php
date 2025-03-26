<div class="titulo">Desafio PI</div>

<?php

// Nessa desafio eu tinha que achar um jeito que falar que ambos os pi são iguais, mesmo com a diferença de 0.01

echo pi();
echo '<br>';
$pi = 3.14;

if ($pi - pi() <= 0.01) {
    echo '<br> Iguais!';
}else {
    echo '<br> Diferentes!';
}

?>