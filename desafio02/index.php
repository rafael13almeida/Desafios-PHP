<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Gerando números aleatórios</h1>
    </main>
    <?php

    if(isset($_POST['btn-gerar'])) {
        $numero = rand(1,100);
        echo "<p>Gerando um número aleatório de 0 a 100...</p>
              <p>O valor gerado foi <strong>$numero</strong></p>";
    }        
    ?>

    <form action="index.php" method="post">
        <input type="submit" name="btn-gerar" value="&#127879 Gerar Número">
    </form>

    </body>
</html>