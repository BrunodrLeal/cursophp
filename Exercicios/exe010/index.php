<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - 10 PHP Raiz Quadrada e Cubica.</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    // capturando os dados do formulario Retrtoalimentado.
    $numero1 = $_GET['n1'] ?? 0; 
    $peso1 = $_GET['n2'] ?? 0; 
    $numero2 = $_GET['n3'] ?? 0; 
    $peso2 = $_GET['n4'] ?? 0; 
    ?>
    <main>
        <h1>Médidas Aritiméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

        <label for="d1"><strong>1° Valor</strong></label>
            <input type="number" name="n1" id="n1" value="<?=$numero1?>">

        <label for="d2"><strong>1° Peso</strong></label>
            <input type="number" name="n2" id="n2" value="<?=$peso1?>">

        <label for="d3"><strong>2° Valor</strong></label>
            <input type="number" name="n3" id="n3" value="<?=$numero2?>">

        <label for="d4"><strong>2° Peso</strong></label>
            <input type="number" name="n4" id="n4" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>   
    </main>
    <section>
            <h2>Cáuculo das Médias</h2>
            <?php 
            // calculos. 
           $mediaSimples = ($numero1+ $numero2) /2;
           $mediaPonderada = (($numero1 * $peso1) + ($numero2 * $peso2)) / ($peso1 + $peso2);

            echo "Analisando o número $numero1 e $numero2:<br>" ;
           
            echo "° Média simples: <strong>" . number_format($mediaSimples, 2, ",", ".") . "</strong><br>";
            
            echo "° Média ponderada: <strong>" . number_format($mediaPonderada, 3,",",".").  "</strong>";
            ?>

    </section>
    
</body>
</html>