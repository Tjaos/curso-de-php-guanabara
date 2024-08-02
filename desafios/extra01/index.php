<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sorteio Mega-sena</title>
</head>
<body>
    <?php 
        $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_SPECIAL_CHARS);
        $quantidade = $_GET['qtd'];
        $min = $_GET['min'];
        $max = $_GET['max'];

        //Função para sortear os números:
        function sortearNumeros($quantidade, $min, $max){
            $numerosSorteados = [];

            while(count($numerosSorteados) < $quantidade){
                $numero = mt_rand($min,$max);
                if (!in_array($numero, $numerosSorteados)){
                    $numerosSorteados[] = $numero;
                }
            }
            return$numerosSorteados;
        };
    ?>
    <main>
        <h2>Números para sortear para a Mega-Sena</h2>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="qtd">Quantidade</label>
            <input type="number" name="qtd" id="qtd" value="<?= $_GET['qtd']?>">

            <label for="min">Valor mínimo</label>
            <input type="number" name="min" id="min" value="<?= $_GET['min']?>">

            <label for="max">Valor Máximo</label>
            <input type="number" name="max" id="max" value="<?= $_GET['max']?>">
            <input type="submit" value="Sortear">


        </form>
        <?php 
            $jogo2 = sortearNumeros($quantidade, $min, $max);
            sort($jogo2); //ordena os numeros
        ?>
        <ul>
            <?php 
                foreach($jogo2 as $n ){
                    echo "<li>$n <br></li>";
                }
            ?>
        </ul>
    </main>
</body>
</html>