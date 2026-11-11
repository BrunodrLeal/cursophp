<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resutlado Final</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
            $sorteio = mt_rand(0,100);
            echo "Trabalhando com números aleatórios <br>";
            echo "Gerando um número aleatório entre 0 e 100... <br>";
            echo "O número sorteado foi: $sorteio";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro! </button>
    </main>
</body>
</html>