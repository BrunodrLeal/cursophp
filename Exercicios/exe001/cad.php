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
        <section>
        <h1>Resultado Final</h1>
        <?php
        if($_GET["Numero"] == null) {
            echo "<p>Valor não informado</p>";
        } else {
        $numero = $_GET["Numero"];
            echo "<p> O numero escolhido foi <strong>$numero</strong>!";
            echo "<p> O seu antecessor é <strong>" . $numero ." é " .($numero - 1)."</strong>!";
            echo "<p> O seu sucessor é <strong>" . $numero ." é " .($numero + 1)."</strong>!";
        }?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
        </section>
        
    </header>
    
</body>
</html>