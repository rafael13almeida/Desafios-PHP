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
        <p>
        <?php
            $numero = $_POST['numero'];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "Número escolhido <strong>$numero</strong>";
            echo "<br>Número antecessor $antecessor";
            echo "<br>Número sucessor  $sucessor";        
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
</body>

</html>