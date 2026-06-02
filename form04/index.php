<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form 03</title>
</head>
<body>
    <h1>Conversor de Moedas</h1>
    <form action="index.php" method="get">
        <label>Quantos R$ você tem na carteira?</label><br>
        <input type="number" name="money" step="0.01"><br>
        <input type="submit" value="Converter">
    </form>
    <?php
        $money = $_GET["money"] ?? 0;
        // Formatação de moedas com internacionalização
        // Biblioteca intl (Internallization PHP)
        $standard = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        if ($money != 0) {
            printf("Seus <strong>%s</strong> equivalem a <strong>%s</strong>",
            numfmt_format_currency($standard, $money, "BRL"),
            numfmt_format_currency($standard, $money/5.02, "USD"));
        }
    ?>
</body>
</html>