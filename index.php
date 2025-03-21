<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Curso PHP</title>
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos exercicios</h2>

    </header>

    <main class="principal">

        <div class="conteudo">
            <nav class="modulos"> <!--FLEX CONTAINER-->
                <div class="modulo verde"> <!--FLEX ITEM-->
                    <h3>Básicos</h3>
                    <ul>
                        <li> 
                            <a href="exercicio.php?dir=basico&file=ola">
                                Olá PHP</a>
                        </li>
                        <li> 
                            <a href="exercicio.php?dir=basico&file=html">
                                Integração HTML</a>
                        </li>
                        <li> 
                            <a href="exercicio.php?dir=basico&file=css">
                                Integração CSS</a>
                        </li>
                        <li> 
                            <a href="exercicio.php?dir=basico&file=comentarios">
                                Comentários PHP</a>
                        </li>
                        <li> 
                            <a href="exercicio.php?dir=basico&file=desafio">
                                Desafio</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho"> <!--FLEX ITEM-->
                    <h3>Tipos</h3>
                    <ul>
                        <li> 
                            <a href="exercicio.php?dir=tipos&file=int">
                                Tipo Inteiros</a>
                        </li>
                        <li> 
                            <a href="exercicio.php?dir=tipos&file=float">
                                Tipo Float</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

    </main>

    <footer class="rodape">

        COD3R & ALUNOS @ <?= date('Y'); ?>

    </footer>

</body>

</html>