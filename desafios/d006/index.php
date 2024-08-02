<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_SPECIAL_CHARS);
        $dividendo = $_GET["dividendo"];
        $divisor = $_GET["divisor"];
    ?>
    <section>
        <h1>Anatomia de uma Divisão</h1>
        <form action="" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo">

            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor">
            <input type="submit" value="Analisar">
        </form>
    </section>
    <section class="tablestyle">
        <h3>Estrutura da Divisão</h3>
        <table>
            <tr><td><?=$dividendo?></td> <td><?=$divisor?></td></tr>
            <tr><td><?=$dividendo%$divisor ?></td> <td><?=number_format($dividendo/$divisor,0) ?></td></tr>
        </table>
    </section>
    <?php 
    
    ?>
</body>
</html>