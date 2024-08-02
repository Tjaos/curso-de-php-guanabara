<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício de PHP</title>
</head>
<body>
    <main>
      <pre>
    <?php setcookie("dia-da-semana", "SEGUNDA", time() + 3600);
          session_start();
          $_SESSION["teste"] = "FUNCIONOU!";
    
    ?>

      <h3>Super Global GET:</h3>
      <?php var_dump($_GET)?>

      <h3>Super Global POST:</h3>
      <?php var_dump($_POST)?>

      <h3>Super Global Request:</h3>
      <?php var_dump($_REQUEST)?>

      <h3>Super Global COOKIE:</h3>
      <?php var_dump($_COOKIE)?>

      <h3>Super Global SESSION:</h3>
      <?php var_dump($_SESSION)?>
      
      <h3>Super Global ENV:</h3>
      <?php var_dump($_ENV)?>

      <h3>Super Global SERVER:</h3>
      <?php var_dump($_SERVER)?>

      <h3>Super Global GLOBALS:</h3>
      <?php var_dump($GLOBALS)?>
    </pre>
    </main>    

</body>
</html>