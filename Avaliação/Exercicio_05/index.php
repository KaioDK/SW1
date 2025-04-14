<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 5 - Par ou Ímpar</title>
</head>
<body>
    <h2>Verificador de Par ou Ímpar</h2>
    <form method="POST">
        Número: <input type="number" name="numero" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    function ehPar($numero) {
        return $numero % 2 == 0;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);
        if (ehPar($numero)) {
            echo "<p>$numero é par.</p>";
        } else {
            echo "<p>$numero é ímpar.</p>";
        }
    }
    ?>
</body>
</html>
