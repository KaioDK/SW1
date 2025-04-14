<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabela com Cores Alternadas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: rgb(228, 247, 176);
        }
        tr:nth-child(odd) {
            background-color: rgb(107, 202, 171);
        }
    </style>
</head>
<body>

    <h2>Tabela com Cores Alternadas</h2>

    <table>
        <thead>
            <tr>
                <th>Coluna 1</th>
                <th>Coluna 2</th>
                <th>Coluna 3</th>
                <th>Coluna 4</th>
            </tr>
        </thead>
        <tbody>
            <?php
                for ($i = 1; $i <= 8; $i++) {
                    echo "<tr>";
                    for ($j = 1; $j <= 4; $j++) {
                        echo "<td>Linha $i, Coluna $j</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

</body>
</html>
