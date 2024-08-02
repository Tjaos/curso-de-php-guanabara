<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de Número aleatório</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
            $min = 0;
            $max = 100;
            
            //rand() = 1951 - Linear Congrential Gerator (não confiável)
            //mt_rand() = 1997 - Mersenne Twister (4x mais rápido que a rand)
            //A partir do php 7.1, rand() é um simples apontamento para mt_rand()
            //random_int() gera números aleatórios criptograficamente seguros (o mais lento de todos)
            $num = mt_rand($min, $max);

            echo "<p>Gerando um número aleatório entre $min e $max...</p> <br>";
            echo "<p>O número gerado foi <strong>$num</strong></p>";

        ?>
        <button onclick="history.go(0)">&#x1F504; Gerar outro</button>
    </main>
</body>
</html>