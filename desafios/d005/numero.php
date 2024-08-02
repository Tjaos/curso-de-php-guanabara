<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <?php 
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
        $num = $_POST["n"] ?? 0;
    ?>
    <main>
        <h1>Analisador de número Real </h1>
        <?php echo "<p>Analisando o número <strong>". number_format($num, 3, ",", ".") . "</strong>  passado pelo usuário:</p>";

        $inteiro = (int) $num;
        $frac = $num - $inteiro;
        echo "<ul>
                <li>A parte inteira do número é <strong>". number_format($inteiro, 0, ",", ".") ."</strong></li>
                <li>A parte fracionária do número é <strong>". number_format($frac, 3, ",", ".") ."</strong></li>
             </ul>";
        ?>
    

        <button onclick="javascript:history.go(-1)" >Voltar</button>
    </main>
    
</body>
</html>