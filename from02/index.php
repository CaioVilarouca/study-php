<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 02</title>
</head>
<body>
    <form action="index.php" method="get">
            <label for="nome"><strong>Primero Número:</strong></label>
            <input type="text" name="number"> 
            <br>
            <br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="Enviar">       
    </form>
    <?php  $number = $_GET["number"] ?? "0"?>
    <h1>Resultado Final</h1>
    <?php
        echo"<p>O número escolhido é <strong>$number</strong></p>";
        printf("<p>O seu <em>antecessor é %d</em></p>",$number-1);
        printf("<p>O seu <em>sucessor é %d</em></p>", $number+1);
    ?>
</body>
</html>