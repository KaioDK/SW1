<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 3 - Fatorial</title>
</head>
<body>
    <h2>Calculadora de Fatorial</h2>
    <form method="POST">
        Número: <input type="number" name="num" min="0" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    function fatorial($num) {
        $fat = 1;
        while ($num > 1) {
            $fat *= $num;
            $num--;
        }
        return $fat;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = intval($_POST["num"]);
        $resultado = fatorial($num);
        echo "<p>Fatorial de $num é $resultado</p>";
    }
    ?>
</body>
</html>
