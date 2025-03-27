<div class="titulo">Desafio Switch</div>

<form action="#" method="post">

    <input type="text" name="param">

    <select name="conversao" id="conversao">
        <option value="km-milha">
            Km > Milha
        </option>
        <option value="milha-km">
            Milha > Km
        </option>
        <option value="metros-km">
            Metros >Km
        </option>
        <option value="km-metro">
            Km > Metro
        </option>

        <option value="c-fr">
            Celsius > fahrenheit
        </option>
        <option value="fr-c">
            Fahrenheit > Celsius
        </option>
    </select>

    <button>Calcular</button>

</form>

<style>

    form > * {
        font-size: 1.8rem
    }

</style>

<?php

$parametro = $_POST['param'];
$conversao = $_POST['conversao'];

switch($conversao){

    case 'km-milha':
        echo "Valor de $parametro KMs em milhas é: " . $parametro * 0.62 . ' Milhas';
        
    break;

    case 'milha-km':
        echo "Valor de $parametro milhas em KMs é: " . $parametro * 1.60 . ' KMs';
        
    break;

    case 'metros-km':
        echo "Valor de $parametro metro em KMs é: " . $parametro * 0.001 . ' KMs';
        
    break;

    case 'km-metro':
        echo "Valor de $parametro KMs em metros é: " . $parametro * 1000 . ' Metros';
        
    break;

    case 'c-fr':
        echo "Valor de $parametro graus Celsius em Fahrenheit é: " . ($parametro * 1.8) + 32 . ' Graus Fahrenheit';
        
    break;
    
    case 'fr-c':
        echo "Valor de $parametro Fahrenheit em Celsius é: " . (($parametro - 32) / 9) * 5 . ' Graus Celsius';
        
    break;

    default :
        echo 'Nenhum valor digitado!';
    
    break;

}

?>