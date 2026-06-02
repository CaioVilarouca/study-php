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
        <input type="text" name="money"><br>
        <input type="submit" value="Converter">
    </form>
    <?php
        $money = $_GET["money"] ?? 0;

        if (!$money == 0) {
            printf("Seus R$%.2f equivalem a <strong>R$%.2f<strong>",$money,$money/5.02);
        }
    ?>
</body>
</html>