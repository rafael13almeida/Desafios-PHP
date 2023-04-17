<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe seu Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Informe seu Salário</h1>
        <?php 
            $salario = $_POST['salario'] ?? 0;
            $minimo = 1320;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" min="0" step="0.01" value="0" require>
            <p>Considerando o salário mínimo de R$1.320</p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resposta</h2>
        <?php 
        $numSalario = (int) ($salario / $minimo);
        $restoSalario = $salario - ($numSalario * $minimo);

        if($salario === 0) {
            echo "";
        }
        else if($salario < $minimo) {
            echo "Salário menor que o mínimo, <strong>faltam R$".number_format($minimo - $salario, 2, ",", ".")."</strong> para completar um salário mínimo";
        } else {
            echo "Quem recebe um salário de R$",number_format($salario, 2, ",", ".")." ganha <strong>".$numSalario." salário(s) mínimo(s)</srtong>  + <strong>R$".number_format($restoSalario, 2, ",", ".")."</strong>.";
        }
        ?>
    </section>
</body>
</html>