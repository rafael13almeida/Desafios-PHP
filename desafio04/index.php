<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas V2.0</h1>

        <form action="conversor.php" method="post">
            <p>
                <label for="quantidade">Insira o valor em reais que deseja converter para dolar</label>
                <input type="number" name="real" id="real" min=0 step=".01" require>
                <input type="submit" value="Converter">
            </p>    
        </form>
    </main>
</body>
</html>