<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Preço</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Reajustador de Preços</h1>

        <?php 
            $preco =    $_POST['preco'] ?? 0;
            $reajuste = $_POST['reajuste'] ?? 0;
            
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="preço">Informe o valor do produto (R$):</label>
            <input type="number" name="preco" id="preco" step="0.01" value="<?=$preco?>" require>
            <label for="reajuste">Qual será o percentual de reajuste? <strong>(%<?=$reajuste?>)</strong></label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" onchange="this.form.submit();" value="<?=$reajuste?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $valorPercentual = $reajuste / 100;
            $valorReajuste = $preco + ($preco * $valorPercentual);
            echo "<p>O produto que custava R$".number_format($preco, 2, ",", ".")." com ".$reajuste."% de aumento<strong> vai passar a custar R$".number_format($valorReajuste, 2, ",", ".") ."</strong></p>";           
        ?>
    </section>

</body>
</html>