<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios - 12 PHP Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// Capturando os dados do formulário
$preco = (float) ($_GET['p1'] ?? 0); $percentual = (int) ($_GET['reajuste'] ?? 18);
// Calculando o reajuste
$aumento = $preco * ($percentual / 100); $novoPreco = $preco + $aumento;
?>
<main>
    <h1>Reajustador de Preços</h1>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
        <label for="p1">
            <strong>Preço do Produto (R$)</strong>
        </label>
        <input
            type="number"
            name="p1"
            id="p1"
            min="0"
            step="0.01"
            value="<?= htmlspecialchars((string)$preco) ?>"
            required
        >
        <label for="reajuste">
            Qual será o percentual de reajuste?
            (<strong><span id="valor"><?= $percentual ?></span>%</strong>)
        </label>
        <input
            type="range"
            name="reajuste"
            id="reajuste"
            min="0"
            max="100"
            value="<?= $percentual ?>"
        >
        <input type="submit" value="Reajustar">
    </form>
</main>
<?php if (isset($_GET['p1'])): ?>
<section>
    <h2>Resultado do Reajuste</h2>
    <p>
        Preço original:
        <strong>R$ <?= number_format($preco, 2, ',', '.') ?></strong>
    </p>
    <p>
        Percentual de reajuste:
        <strong><?= $percentual ?>%</strong>
    </p>
    <p>
        Valor do aumento:
        <strong>R$ <?= number_format($aumento, 2, ',', '.') ?></strong>
    </p>
    <p>
        Novo preço:
        <strong>R$ <?= number_format($novoPreco, 2, ',', '.') ?></strong>
    </p>
</section>
<?php endif; ?>
<script>
    const reajuste = document.getElementById('reajuste');
    const valor = document.getElementById('valor');

    reajuste.addEventListener('input', function() {
        valor.textContent = reajuste.value;
    });
</script>
</body>
</html>