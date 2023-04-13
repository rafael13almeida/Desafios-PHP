<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Número Analisado !!</h1>
        <p>
            <?php
                $numeroReal = $_POST['numero_real'] ?? 0; //Pego o número inserido pelo usuário.
                $parteInteira = floor($numeroReal); // $parteInteira = (int) $numeroReal 
                $parteFracionada = $numeroReal - $parteInteira;

                echo "Analisando o número <strong>". number_format($numeroReal, 3, ",", ".") ." </strong>informado pelo usuário: <br>";
                echo "<ul>
                        <li>A parte inteira do número é: ".number_format($parteInteira, 0, ",", ".")."</li>
                        <li>A parte fracionada do número é: ".number_format($parteFracionada, 3, ",", ".")."</li>
                    </ul>";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>


