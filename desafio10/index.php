<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando sua Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Calculando sua Idade</h1>
        <form action="" method="post">
            <label for="ano de nascimento">Digite o ano em que você nasceu:</label>
            <input type="number" name="anoNascimento" id="anoNascimento" min="1900" max="2100">
            <label for="ano de curiosidade">Quer saber sua idade em que ano?</label>
            <input type="number" name="anoCuriosidade" id="anoCuriosidade" min="1900" max="2100">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
    </section>
</body>
</html>