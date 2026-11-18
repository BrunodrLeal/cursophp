<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - 08 PHP Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    // capturando os dados do formulario Retrtoalimentado.
    $salario = $_GET['d1'] ?? 0; 
    $salarioBase = 1618;
    ?>
    <main>
        <h1>Informe seu salário.</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            
        <label for="d1"><strong>Salário (R$)</strong></label>
            <input type="number" name="d1" id="d1" value="<?=$salario?>">
           <p>considerando o salário mínimo de <strong>R$ 1.618,00</strong></p>
            <input type="submit" value="Calcular">
        </form>   
    </main>
    <section>
            <h2>Resultado Final</h2>
            <?php 
            // calculos.

            $resultado =  fmod($salario , $salarioBase);
            $resta  = $salario % $salarioBase;
            echo "Quem recebe um salário de " . $salario . " ganha " . "<strong> $resultado . salários mínimos + </strong> " . $resta;
            
            ?>

    </section>
    
</body>
</html>