<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Calculadora de Tempo</h1>

        <?php
            $tempo = $_POST['tempo'] ?? 0;
        ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="segundos">Qual o total de segundos? </label>
            <input type="number" name="tempo" id="tempo" min="0" value="<?= $tempo ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando Tudo</h2>

        <p>Analisando o valor que você digitou, <strong><?= $tempo ?></strong> equivalem a um total de: </p>

        <?php
            $semana = floor($tempo / 604800);
            $tempo %= 604800;
            $dia = floor($tempo / 86400);
            $tempo %= 86400;
            $hora = floor($tempo / 3600);
            $tempo %= 3600;
            $minuto = floor($tempo / 60);
            $tempo %= 60;
        ?>

        <ul>
            <li><?= $semana ?> semanas</li>
            <li><?= $dia ?> dias</li>
            <li><?= $hora ?> horas</li>
            <li><?= $minuto ?> minutos</li>
            <li><?=$tempo?> segundos</li>

        </ul>
    </section>
</body>

</html>