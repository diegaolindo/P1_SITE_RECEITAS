<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Receitas Caseiras</title>
    <link rel="stylesheet" href="back.css">
</head>

<body>
    <header>
        <nav>
            <ul class="navega">
                <li><a href="">
                        <h2>Casaeira</h2>
                    </a></li>
                <li>
                    <h1 id="titulo">Adicionar</h1>
                </li>
                <li><a href="listagem.html">
                        <h2>Listagem</h2>
                    </a></li>
            </ul>
        </nav>
    </header>

    <?php
    $nome = $_POST['nomeRece'] ?? 'nenhum';
    $ingredientes = $_POST['nomeIngred'] ?? 'nenhum';
    ?>


    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="">Nome da receita: </label>
            <input type="text" name="nomeRece" id="">
            <label for="Ingredientes">Ingredientes:</label>
            <input type="text" name="nomeIngred" id=""> <br>
            <input type="submit" value="Enviar">
        </form>

    </main>

    <section>
        <h1>Sua receita</h1>

        <?php
        echo "<strong>$nome</strong>";
        echo "<br>Ingredientes:";
        echo "<ul>";
        echo "<li>$ingredientes</li>";
        echo "</ul>";
        ?>
    </section>


    <footer>
        <nav>
            <ul class="redessoci">

                <li><a href="">Instagram <img src="Imagens/Instagram_logo_2022.svg.png" height="10px"></a></li>
                <li><a href="">Facebook <img src="Imagens/pngimg.com - facebook_logos_PNG19750.png" width="10px"></a></li>
                <li><a href="">Youtube <img src="Imagens/image.png" width="12px"></a></li>
            </ul>
        </nav>
    </footer>

</body>

</html>