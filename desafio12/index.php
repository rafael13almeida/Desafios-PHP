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
            $semana   = 604800;
            $dia      = 86400;
            $hora     = 3600;
            $minutos  = 60;
            $tempo = 0;
        ?>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="segundos">Qual o total de segundos? </label>
            <input type="number" name="seg" id="seg" min="0">
            <input type="submit" value="Caalcular">
        </form>
    </main>

    <section>
        <h2>Totalizando Tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=$tempo?></strong> equivalem a um total de: </p>
        <ul>
            <li> semanas</li>
            <li> dias</li>
            <li> horas</li>
            <li> minutos</li>
            <li> segundos</li>
        </ul>
    </section>
</body>

</html>