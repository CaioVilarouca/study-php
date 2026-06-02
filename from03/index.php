<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 03</title>
</head>
<body>
    <h1>Sorteador de Números</h1>
    <?php 
        // rand() = 1951 - Linear Congrential Gererator
        // mt_rand() = 1997 - Mersenne Twister
        // random_int() gera números aleatórios criptograficamente seguros
        echo "Gerando um número aleatório entre 0 e 100...<br>";
        echo "O valor gerado foi <strong>".mt_rand(0,100)."</strong><br>";
    ?>
    <button onclick="javascript:document.location.reload()">&#x1F504;Gerar outro número</button>
</body>
</html>