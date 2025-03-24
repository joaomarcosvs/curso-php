<div class="titulo">Operações Aritmeticas</div>

<?php 
echo 1 + 1, '<br>';
var_dump(1 + 1.0);
echo '<br>';
echo 1 + 1.25, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7/4, '<br>';
echo intdiv(7, 4),'<br>'; //ele só vai tirar as casas decimais, idependente se for 1.9
echo round(7/4); //arredonda o valor
//echo intdiv(7, 0), '<br>';  //erro
echo 4 ** 2, '<br>'; // elevado a dois

// Precedencia dos operadores
// () > ** > / * % > + -
//Ordem em que os fatores são operados, primeiro os parenteses, depois potencia, depois multiplicação e divisão e por fim mais e menos 

echo '<p> Precedencia </p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
