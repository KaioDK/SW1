<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Exercício 4 - Soma dos múltiplos de 3</title>
</head>
<body>
    <h2>Soma dos múltiplos de 3 entre 1 e 100</h2>

    <?php
    $soma = 0;
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0) {
            $soma += $i;
        }
    }
    echo "<p>A soma é: $soma</p>";
    ?>
</body>
</html>
