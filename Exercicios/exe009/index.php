<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - 09 PHP Raiz Quadrada e Cubica.</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    // capturando os dados do formulario Retrtoalimentado.
    $numero = $_GET['d1'] ?? 0; 
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            
        <label for="d1"><strong>Número</strong></label>
            <input type="number" name="d1" id="d1" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>   
    </main>
    <section>
            <h2>Resultado Final</h2>
            <?php 
            // calculos. 
            $raizQuadrada = sqrt($numero);
            $raizCubica = pow($numero, 1/3);

            echo "Analisando o <strong>número $numero</strong> temos:<br>" ;
            
            echo "A sua raiz quatrada é: <strong>$raizQuadrada</strong><br>";

            echo "A sua raiz cúbica é: <strong>$raizCubica</strong>";
            ?>

    </section>
    
</body>
</html>