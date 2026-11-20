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
            $semana = intdiv($dado,604800);
            $resto = $dado % 604800;

            $dia = intdiv($resto, 86400);
            $resto = $resto % 86400;

            $hora = intdiv($resto,3600 );
            $resto = $resto % 3600;

            $minuto = intdiv($resto, 60);
            $resto = $resto % 60;

            $segundos = $resto;
            
        ?>
        <main>
            <h1>Calculadora de tempo</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="d1"><strong>Qual é o total de segundos?</strong></label>
                <input type="number" name="d1" id="d1" value="<?=$dado?>">

            <input type="submit" value="Calcular">
            </form>   
        </main>
        <section>
                <h2>Totalizando tudo.</h2>
                <p>Analisando o valor que você digitou, <strong><?= $dado ?> segundos</strong> equivalem a um total de: </p>
            
                <p><?= $semana ?> semanas,</p>
                <p><?= $dia ?> dias,</p>
                <p><?= $hora ?> horas,</p>
                <p><?= $minuto ?> minutos e</p>
                <p><?= $segundos ?> segundos.</p>

        </section>
    </body>
</html>