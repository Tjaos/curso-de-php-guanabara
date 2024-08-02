<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do Processo</h1>
    </header>
    <main>
        <?php 
        $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $nome = empty($_POST["nome"]) ? "Visitante" : $_POST["nome"] ;
        $sobrenome = empty($_POST["sobrenome"]) ? "desconhecido": $_POST["sobrenome"];
        echo "Olá <strong>$nome $sobrenome</strong>, Seja muito bem-vindo! Este é o meu site!";
        //var_dump($_REQUEST) // Junção de $_GET/$_POST/$_COOKIES]
        //var_dump($_GET)
        //var_dump($_REQUEST);
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página inicial</a></p>
    </main>
</body>
</html>