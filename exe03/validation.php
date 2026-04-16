<style>
    .negativo {
        color: red;
    }
    .positivo {
        color: green;
    }
</style>
<?php
try {
    if (isset($_GET['number'])) {
        if (is_numeric($_GET['number'])) {
            if ($_GET['number'] >= 0)
                echo "<p>Status: <strong><span class='positivo'>POSITIVO</span></strong></p>";
            else
                echo "<p>Status: <strong><span class='negativo'>NEGATIVO</span></strong></p>";
        } else {
            throw new Exception("Valor inválido");
        }
    } else {
        throw new Exception("Nenhum valor foi informado");
    }
} catch (Exception $e) {
    echo "<p style='color:red;'>Erro: " . $e->getMessage() . "</p>";
}
?>
<a href="index.php">Click aqui para voltar</a>