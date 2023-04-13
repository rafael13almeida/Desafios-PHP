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
        <h1>Conversor de Moedas V2.0</h1>
        <p>
            <pre>
            <?php 
                $real = $_POST['real'] ?? 0;

                $dataInicio = date("m-d-Y", strtotime("-7 days"));
                $dataFim = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$dataInicio.'\'&@dataFinalCotacao=\''.$dataFim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';

                $dados = json_decode(file_get_contents($url), true);
                $cotacao = $dados["value"][0]["cotacaoCompra"];               
                $dolar = $real / $cotacao;

                echo "O valor de ". number_format($real, 2, ",", "."). " em reais, equivalem a U$".number_format($dolar, 2, ",", "."). " dolares.<br>De acordo com a cotação de hoje do <a href='https://www.bcb.gov.br/' target='_blank'>Banco Central do Brasil</a>";
                
            ?>
            </pre>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>



