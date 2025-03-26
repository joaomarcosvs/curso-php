<div class="titulo">Desafio Op Logicos</div>

<!--

// Dois trabalhos, terça e quinta
// Se os dois derem certo -> tv 50 e sorvete
// Se apenas um der certo -. tv 32 e sorvete
// Se nenhum der cert -> ficar em casa e mais saudavel

-->

<form action="#" method="post">

    <div>
        <label for="t1">Trabalho 1 (Terça)</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta)</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>

    button, select {
        font-size: 1.8rem;
    }

</style>

<?php

echo $_POST['t1'];
echo '<br>';
echo $_POST['t2'];
echo '<br>';

if($_POST['t1'] && $_POST['t2'] == true){
    echo 'Comprar TV 50 e tomar sorvete';
}else if($_POST['t1'] XOR $_POST['t2'] == true) {
    echo "Comprar TV 32 e tomar sorvete";
}else{
    echo "Ficar em casa e não comer açucar!";
}
