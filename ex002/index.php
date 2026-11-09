<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
    date_default_timezone_set("America/Sao_Paulo"); // horário atual. 
    echo " Hoje é dia " . date(" d/m/y"); // d = dia, D = dia da semana, M = mês abreviado, Y ano com 4 dígitos, y ano com 2 dígitos
    echo " e a hora atual é " . date("G:i:s");
    $nomeCompletoCliente =  "Camel Case";
    $telefone_contato_fornecedor = "Snake Case";
    $nomecursosuperior = "Pascal Case";
    ?>
</body>
</html>