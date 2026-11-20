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
            $dado = $_GET['d1'] ?? 0; 
        
            // calculos. 
            $nota100 = intdiv($dado,100);
            $resto = $dado % 100;

            $nota50 = intdiv($resto, 50);
            $resto = $resto % 50;

            $nota10 = intdiv($resto,10 );
            $resto = $resto % 10;

            $nota5 = intdiv($resto, 5);
            $resto = $resto % 5;
            
        ?>
        <main>
            <h1>Caixa Eletrônico</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="d1"><strong>Qual valor você deseja sacar? (R$)*</strong></label>
                <input type="number" name="d1" id="d1" value="<?=$dado?>">
                <p>* Notas disponíveis: R$100, R$50, R$10, R$5</p>
            <input type="submit" value="Calcular">
            </form>   
        </main>
        <section>
                <h2>Saque de R$235,00 realizado</h2>
                <p>O caixa eletônico vai te entregar as seguntes notas:</p>
                <div class="nota">
                <img src="notade100reais.png" alt="Nota de 100 reais" style="width: 120px; height: auto;">
                <span><?= "x".$nota100 ?></span>
                </div>

                <div class="nota">
                <img src="notade50reais.png" alt="Nota de 100 reais" style="width: 120px; height: auto;">
                <span><?= "x".$nota50 ?></span>
                </div>

                <div class="nota">
                <img src="notade10reais.png" alt="Nota de 100 reais" style="width: 120px; height: auto;">
                <span><?= "x".$nota10 ?></span>
                </div>

                <div class="nota">
                <img src="notade5reais.png" alt="Nota de 100 reais" style="width: 120px; height: auto;">
                <span><?= "x".$nota5 ?></span>
                </div>

        </section>
    </body>
</html>