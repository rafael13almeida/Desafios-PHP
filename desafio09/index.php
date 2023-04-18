<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aritmética</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Médias Aritiméticas</h1>

        <?php   
            $primValor = $_POST['valor1'] ?? 0;
            $primPeso  = $_POST['peso1']  ?? 0;
            $segValor  = $_POST['valor2'] ?? 0;
            $segPeso   = $_POST['peso2']  ?? 0;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="valor1">1º Valor</label>
            <input type="number" name="valor1" id="valor1">
            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="peso1">
            <label for="valor2">2º Valor</label>
            <input type="number" name="valor2" id="valor2">
            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" id="peso2">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <?php 
        
    ?>

    <section>
        <h2>Cálculo das Médias</h2>
        <ul>

        </ul>
    </section>
</body>
</html>