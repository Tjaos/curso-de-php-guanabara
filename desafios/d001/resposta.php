<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>resposta desafio 01</title>
</head>
<body>
    <section>
        <h1>Resultado final</h1>

        <?php 
            $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_SPECIAL_CHARS);
            $numero = empty($_GET["numero"])? 0 : $_GET["numero"];

            echo "O número escolhido foi $numero <br/>";
            echo " O seu antecessor é ". ($numero -1)."<br/>";
            echo "O seu sucessor é " . ($numero+1);
        ?>
        <button onclick="javascript:window.location.href='index.html'" >&#x2B05; Voltar</button>
    </section>
</body>
</html>