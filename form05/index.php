<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form 05</title>
</head>
<body>
    <h1>Conversor de Moedas</h1>
    <form action="index.php" method="get">
        <label>Quantos R$ você tem na carteira?</label><br>
        <input type="number" name="money" step="0.01"><br>
        <input type="submit" value="Converter">
    </form>
    <?php
    ?>
    <pre>
    <?php // conversor de moedas usando API para pegar automaticamente a cotação do dólar pelo Banco Central
        $inicio = date("m-d-Y", strtotime("-6 days"));
        $fim = date("m-d-Y");
        
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url) ,true);
        //var_dump($dados);

        $cotacao = $dados["value"][0]["cotacaoCompra"];

        $money = $_GET["money"] ?? 0;
        // Formatação de moedas com internacionalização
        // Biblioteca intl (Internallization PHP)

        $standard = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        if ($money != 0) {
            printf("Seus <strong>%s</strong> equivalem a <strong>%s</strong>",
            numfmt_format_currency($standard, $money, "BRL"),
            numfmt_format_currency($standard, $money/$cotacao , "USD"));
        }
    ?>
</pre>
</body>
</html>