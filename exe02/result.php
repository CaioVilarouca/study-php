<style>
    .cor {
        color: red;
    }

    p {
        font-size: 42px;
    }
</style>
<?php
    $name = $_GET['name'];
    $age = $_GET['age'];


    echo "<p>Bem vindo: <strong class='cor'>$name</strong> e sua idade é $age </p>";

    if ($age >= 18)
        echo "Você é maior de idade.";
    else 
        echo "<h1>Você é menor de idade e falta ".(18-$age)." anos para chegar a maior idade.</h1>";
?>
        <a href="index.php">voltar</a>

