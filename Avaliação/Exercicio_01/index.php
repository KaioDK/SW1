<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 1 - Média</title>
</head>
<body>
    <h2>Cálculo de Média</h2>
    <form method="POST">
        Nota 1: <input type="number" name="nota1" step="0.1" required><br><br>
        Nota 2: <input type="number" name="nota2" step="0.1" required><br><br>
        Nota 3: <input type="number" name="nota3" step="0.1" required><br><br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST["nota1"];
        $n2 = $_POST["nota2"];
        $n3 = $_POST["nota3"];
        $media = ($n1 + $n2 + $n3) / 3;

        echo "<h3>Média: " . number_format($media, 1, ',', '.') . "</h3>";

        if ($media >= 7) {
            echo "<p>Status: Aprovado</p>";
        } elseif ($media >= 5) {
            echo "<p>Status: Em recuperação</p>";
        } else {
            echo "<p>Status: Reprovado</p>";
        }
    }
    ?>
</body>
</html>
