<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
    
    $dividendo = $_POST['dividendo'] ?? 0;
    $divisor = $_POST['divisor'] ?? 1;

    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="<?=$dividendo?>" require>
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?=$divisor?>" require>
            <input type="submit" value="Analisar">
        </form>
    </main>
        <section>
            <h2>Resultado:</h2>
            <?php 
                $resultado = floor($dividendo / $divisor);
                $resto = $dividendo % $divisor;
            ?>

            <table class="divisao">
                <tr>
                    <td><?=$dividendo?></td>
                    <td><?=$divisor?></td>
                </tr>
                <tr>
                    <td><?=$resto?></td>
                    <td><?=$resultado?></td>
                </tr>
            </table>
        </section>
</body>
</html>