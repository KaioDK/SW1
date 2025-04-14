<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Dinâmica</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Crie sua Tabela!</h2>
<form method="POST">
    <label for="linhas">Quantas Linhas?</label>
    <input type="number" id="linhas" name="linhas" required>
    <label for="colunas">Quantas Colunas?</label>
    <input type="number" id="colunas" name="colunas" required>
    <input type="submit" value="Gerar Tabela">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $linhas = $_POST['linhas'];
    $colunas = $_POST['colunas'];

    echo "<table>";
    for ($i = 0; $i < $linhas; $i++) {
        echo "<tr>";
        $j = 0;
        while ($j < $colunas) {
            echo "<td>Dados $i.$j</td>";
            $j++;
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>