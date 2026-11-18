<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - 07 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    // capturando os dados do formulario Retrtoalimentado.
    $dividendo =$_GET['d1'] ?? 0;
    $divisor =$_GET['d2'] ?? 1; 
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" id="d1" value="<?=$dividendo?>">
            <label for="d2">Dividor</label>
            <input type="number" name="d2" id="d2" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>   
    </main>
    <section>
            <h2>Estrutura da divisão</h2>
            <?php 
            // calculos
            $quociente= intdiv($dividendo, $divisor);
            $resta = $dividendo % $divisor;
               

            ?>
            <table class ="divisao">
                <tr>
                    <td><?=$dividendo?></td>
                    <td><?=$divisor?></td>
                </tr>
                <tr>
                    <td><?=$resta?></td>
                    <td><?=$quociente?></td>
                </tr>
            </table>

    </section>
    
</body>
</html>