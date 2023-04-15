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
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" min="0" value="0" require>
            <p>Considerando o salário mínimo de R$1.380</p>
            <input type="submit" value="Calcular">
        </form>
    </main>
</body>
</html>