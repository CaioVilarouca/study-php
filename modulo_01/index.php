<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Módulo 01</title>
</head>
<body>
    <h1>
        <?= "Olá, Mundo! \u{1F30E}" ?>
    </h1>
    <p>Caio Vilarouca</p>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); // GMT -3 horas de Londres
        echo "Hoje é dia ".date("d/m/yy"). " <br>Horas: " .Date("G:i:s T");
    ?>
    <hr>
    <br><br>
    <?= phpinfo() ?>
</body>
</html>
