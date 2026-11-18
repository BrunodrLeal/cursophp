<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - 13 PHP Calculadora de tempo.</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    // capturando os dados do formulario Retrtoalimentado.
    $numero1 = $_GET['n1'] ?? 0; 
  
    ?>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

        <label for="d1"><strong>Qual é o total de segundos?</strong></label>
            <input type="number" name="n1" id="n1" value="<?=$numero1?>">

        <input type="submit" value="Calcular">
        </form>   
    </main>
    <section>
            <h2>Totalizando tudo.</h2>
            <?php 
            // calculos. 
           
            ?>

    </section>
    
</body>
</html>