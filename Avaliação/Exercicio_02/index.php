<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 2 - Temperatura</title>
</head>
<body>
    <h2>Conversor de Temperatura</h2>
    <form method="GET">
        Temperatura (°C): <input type="number" name="celsius" step="0.1" required>
        <input type="submit" value="Converter">
    </form>

    <?php
    if (isset($_GET["celsius"])) {
        $c = $_GET["celsius"];
        $f = ($c * 9/5) + 32;
        $k = $c + 273.15;

        echo "<p>$c °C = " . number_format($f, 2, ',', '.') . " °F</p>";
        echo "<p>$c °C = " . number_format($k, 2, ',', '.') . " K</p>";
    }
    ?>
</body>
</html>
