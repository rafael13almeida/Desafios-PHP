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
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" min="1">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" min="0">
            <input type="submit" value="Analisar">
        </form>
    </main>
        <section>
            <h2>Resultado:</h2>
            <?php 

                $dividendo = (int) $_POST['dividendo'];
                $divisor = (int) $_POST['divisor'];
                $resultado =  $dividendo / $divisor;
                $resto = $dividendo % $divisor;
                echo "<ul>
                        <li>O valor do Dividendo foi: ".$dividendo."</li>
                        <li>O valor do Divisor foi: ".$divisor."</li><br>
                        <li>O valor inteiro da divisão foi: <strong>".floor($resultado)."</strong></li>
                        <li>O resto da divisão foi: <strong>".$resto."</strong></li>
                    </ul>";
            ?>
        </section>
</body>
</html>