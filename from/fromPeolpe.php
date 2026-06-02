<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $name = $_GET["Name"];
            $surname = $_GET["Surname"];

            if ($name == "") 
                echo "<p>Campos não foram <strong>inseridos</strong>.</p><br>";
            else
                echo "<p>É um prazer te conhecer, <strong>$name $surname</strong>! Hello, World.</p>";
        ?>

        <a href="javascript:history.go(-1)">Voltar a página</a>
    </main>
</body>
</html>