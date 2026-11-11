<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php
            // Cotação vinda da API do Banco Central
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fin = date("m-d-Y");

            $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='$inicio'&@dataFinalCotacao='$fin'&\$top=1&\$orderby=dataHoraCotacao%20desc&\$format=json&\$select=cotacaoCompra,dataHoraCotacao";

            // Consulta a API
            $resposta = file_get_contents($url);

            if ($resposta === false) {
                die("Erro ao consultar a API do Banco Central.");
            }

            $dados = json_decode($resposta, true);

            if (empty($dados["value"])) {
                die("Nenhuma cotação encontrada.");
            }

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            // Quanto dinheiro você tem?
            $real = $_REQUEST["moeda2"] ?? 0;
            

            // Conversão para dólar
            $dolar = $real / $cotacao;

            // Formatação das moedas
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") .
                " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD") . "</p>";

            echo "<p>Cotação atual: R$ " . number_format($cotacao, 4, ",", ".") . "</p>";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>