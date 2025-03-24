<div class="titulo">Tipo boolean</div>

<?php 

echo true; //mostra 1
echo '<br>';
echo false; //mostra nada
echo '<br>';
echo var_dump(true);
echo '<br>';
echo var_dump(false);
echo '<br>';
echo var_dump('false');
echo '<br>';
echo is_bool(false);
echo '<br>';
echo is_bool('false');
echo '<br>';

//Regras

echo '<p> Regras:</p>';
echo '<br>' . var_dump((bool) 0); //Apenas 0 é falso
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);