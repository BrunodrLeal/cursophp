<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php
        $moeda = 5.22;
        if($_GET["moeda2"] <= 0) {
            echo "<p>Valor não informado</p>";
        } else {
            $moeda2 = $_GET["moeda2"] ?? "Valor não informado";
            $resultado = $moeda2/ $moeda;
            echo "<p>Seus R$" .number_format($moeda2, 2 , ',', '.') . " convertidos para dólares resultam em US$ " . number_format($resultado, 2, ',', '.') . "</p>";
            // Formatação de moedas com internaconalização de números
            
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p>Seus ". numfmt_format_currency($padrao, $moeda2, "BRL") ."Equivalem a " . numfmt_format_currency($padrao, $resultado, "USD") . "</p>";
            echo "<p>Cotação Fixa de R$5,22 informada diretamente no código</p>";
        }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>