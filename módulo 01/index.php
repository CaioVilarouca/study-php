<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Módulo 01</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Nome:</label>
        <input type="text" name="name">
        <br>
        <label>Idade</label>
        <input type="text" name="age">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php 
    $name = $_POST["name"];

    if (!$name == null) {
        printf("Seu nome é <strong>%s</strong> e sua idade %d",$name,$_POST["age"]);
    }
?>