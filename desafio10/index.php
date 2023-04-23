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

        <?php 
            
            $dataAtual = date("Y");
            $anoNascimento = $_POST['anoNascimento'] ?? 0;
            $anoCuriosidade = $_POST['anoCuriosidade'] ?? $dataAtual;
            
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="ano de nascimento">Digite o ano em que você nasceu:</label>
            <input type="number" name="anoNascimento" id="anoNascimento" value="<?=$anoNascimento?>" require>
            <label for="ano de curiosidade">Quer saber sua idade em que ano? (Atualmente estamos no ano de <strong> <?=$dataAtual?></strong>)</label>
            <input type="number" name="anoCuriosidade" id="anoCuriosidade" value="<?=$anoCuriosidade?>" require>
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            
            $idade = abs($anoCuriosidade - $anoNascimento);
            if($idade == 2023) {
                echo "<p> Digite o ano em que você nasceu e o ano que você quer saber a idade.</p>";
            } else if($anoNascimento > $anoCuriosidade) {
                echo "<p>Em <strong>$anoCuriosidade</strong> você ainda não tinha nascido.</p>";
            } else {
                echo "<p>Em $anoCuriosidade você terá <strong>$idade anos</strong>.</p>";
            }
        ?>
    </section>
</body>
</html>