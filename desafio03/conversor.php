<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas V1.0</h1>
        <p>
            <?php 
                $real = $_POST['real'] ?? 0;
                $dolar = 5.22;
                $conversao = $real / $dolar;
                echo "Seus ". number_format($real, 2, ",", "."). " equivalem a U$ ".number_format($conversao, 2, ",", ".")."<br><strong>Cotação fixa de 5,22</strong> informada diretamente no código.";
                // $real = str_replace(".", ",", str_replace(",", ".", $_POST['real']));
                // $conversao = strval(round($conversao,2));
                // $conversao = str_replace(".", ",", str_replace(",", ".", $conversao));
                // echo "Seus ".$real. " equivalem a U$ ".$conversao."<br><strong>Cotação fixa de 5,22</strong> informada diretamente no código.";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>



