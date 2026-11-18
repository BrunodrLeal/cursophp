<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - 11 PHP Calculo Idade.</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    // capturando os dados do formulario Retrtoalimentado.
    $idade1 = $_GET['n1'] ?? 0; 
    $ano1 = $_GET['n2'] ?? 0; 
    
    ?>
    <main>
        <h1>Calculo de idade.</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

        <label for="d1"><strong>Em que ano você nasceu?</strong></label>
            <input type="number" name="n1" id="n1" value="<?=$idade1?>">

        <label for="d2">Quer saber sua idade em que ano? (Atualmente estamos em 2026)</label>
            <input type="number" name="n2" id="n2" value="<?=$ano1?>">

            <input type="submit" value="Calcular Médias">
        </form>   
    </main>
    <section>
            <h2>Resultado</h2>
            <?php 
            // calculos. 
            if($idade1 <= $ano1) {
           $idadeReal = ($ano1 - $idade1) ;
           echo "Quem nasceu em $idade1 vai ter <strong>$idadeReal anos</strong> em $ano1 !<br>" ;
           
            } else {
            echo "Digite uma data válida!<br>" ;
            }
            ?>

    </section>
    
</body>
</html>