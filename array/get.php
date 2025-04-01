<div class="titulo">$_GET</div>

<!-- http://localhost/curso-php/exercicio.php?dir=array&file=get&nome=JoaoMarcos -->

<?php
echo $_GET;
echo '<br>';
print_r($_GET);
echo "<br>{$_GET['nome']}";
