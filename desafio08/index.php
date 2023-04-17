<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe um Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Infome um Número</h1>
        
        <?php 
            $numero = $_POST['numero'] ?? 0;
        ?>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="numero">Número:</label>
            <input type="number" min="0" name="numero" id="numero" require>
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>

        <?php
        $raizQ = sqrt($numero);
        $raizC = pow($numero, 1/3);
        echo "Analisando o número <strong>".$numero."</strong> temos: 
            <ul>
                <li>A sua raiz quadrada é: <strong>".number_format($raizQ, 3, ",", ".")."</strong></li>
                <li>A sua raiz cubica é: <strong>".number_format($raizC, 3, ",", ".")."</strong></li>
            </ul>";
        ?>
    </section>
</body>
</html>