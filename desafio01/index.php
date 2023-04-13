<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Números Vizinhos</title>
</head>

<body>
    <header>
        <h1>Números Vizinhos</h1>
    </header>

    <section>
        <form action="num.php" method="post">
            <label for="numero">Escolha um número inteiro</label>
            <input type="number" name="numero" id="numero" min=1  max= 100 required>
            <input type="submit" value="Conferir" id="btn-enviar">
        </form>
    </section>

</body>

</html>