<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor 2.0</title>
</head>
<body>
    <?php 
    //MANIPULANDO A API
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=%2706-07-2024%27&$top=100&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $resultado = json_decode(curl_exec($ch));

    $compra = $resultado->value[0]->cotacaoCompra;
    //echo "Cotação de compra: " . $compra;
    ?>
    <section>
        <h1>
            Conversor de Moedas V2.0
        </h1>
        <?php 
        $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_SPECIAL_CHARS);
        $valorRs = empty($_GET["valor"])? 0 : str_replace(",",".", $_GET["valor"]) ;

        $valorConvertido = number_format($valorRs/$compra, 2);
        echo " <p>Seus R$ $valorRs equivale a <strong>US$ $valorConvertido<strong> <br> </p>";

        echo "<p>Cotação obtida diretamente do <strong>Banco Central do Brasil</strong></p>"
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </section>
</body>
</html>