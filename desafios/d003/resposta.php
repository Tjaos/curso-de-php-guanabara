<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor 2.0</title>
</head>
<body>
    <section>
       <h1>
            Conversor de Moedas V1.0
        </h1> 
        <?php 
        $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_SPECIAL_CHARS);
        $real = empty($_GET["valor"])? 0: $_GET["valor"] ;

        $cotacao = 5.44;
        $dolar = number_format($real/$cotacao, 2);
       /* echo " <p>Seus <strong>R\$" . number_format($valor, 2, ",", ".") . "</strong> equivale a <strong>US\$" . number_format($dolar, 2, ",", ".") . "<strong> <br> </p>";*/

       //FORMATAÇÃO DE MOEDAS COM INTERNACIONALIZAÇÃO
       //biblioteca intl
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

       echo " <p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivale a <strong>US\$" . $dolar . "<strong> <br> </p>";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </section>
</body>
</html>