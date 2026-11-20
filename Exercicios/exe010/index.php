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
    $n1 = $_GET['n1'] ?? 0; //numero1
    $p1 = $_GET['n2'] ?? 0; //peso1
    $n2 = $_GET['n3'] ?? 0; 
    $p2 = $_GET['n4'] ?? 0;  
        // calculos. 
        $mediaSimples = ($n1 + $n2) /2;
        $mediaPonderada = (($n1 * $p1 + $n2 * $p2)) / ($p1 + $p2);
    ?>
    <main>
        <h1>Médidas Aritiméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="d1"><strong>1° Valor</strong></label>
            <input type="number" name="n1" id="n1" required>
            <label for="d2"><strong>1° Peso</strong></label>
            <input type="number" name="n2" id="n2" min="1" required>
            <label for="d3"><strong>2° Valor</strong></label>
            <input type="number" name="n3" id="n3" required>
            <label for="d4"><strong>2° Peso</strong></label>
            <input type="number" name="n4" id="n4" min="1" required>
            <input type="submit" value="Calcular Médias">
        </form>   
    </main>
    <section>
            <h2>Cáuculo das Médias</h2>
            <p>Analisando o número <?= $n1 ?> e <?= $n2 ?> :<br></p>
            <ul>
                <li>A <strong>Média aritimética Simples</strong> com pesos <?= $p1 ?> e <?= $p2 ?> é igual a <?= number_format($mediaSimples,2,",",".") ?>.</li>
                <li>A <strong>Média aritimética Ponderada</strong> com pesos <?= $p1 ?> e <?= $p2 ?> é igual a <?= number_format($mediaPonderada,2,",",".") ?>.</li>
            </ul>

    </section>
    
</body>
</html>