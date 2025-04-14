<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Produtos</title>
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
        .eletronicos { background-color: #e0f7fa; }
        .roupas { background-color: #ffe0b2; }
        .alimentos { background-color: #c8e6c9; }
    </style>
</head>
<body>

<h2>Tabela de Produtos</h2>
<table>
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Categoria</th>
    </tr>
    <?php
    $produtos = [
        ["nome" => "Smartphone", "preco" => "R$ 1.500", "categoria" => "eletronicos"],
        ["nome" => "Camiseta", "preco" => "R$ 50", "categoria" => "roupas"],
        ["nome" => "Notebook", "preco" => "R$ 3.000", "categoria" => "eletronicos"],
        ["nome" => "Calça", "preco" => "R$ 120", "categoria" => "roupas"],
        ["nome" => "Arroz", "preco" => "R$ 20", "categoria" => "alimentos"],
        ["nome" => "Feijão", "preco" => "R$ 15", "categoria" => "alimentos"],
        ["nome" => "TV", "preco" => "R$ 2.000", "categoria" => "eletronicos"],
        ["nome" => "Vestido", "preco" => "R$ 200", "categoria" => "roupas"],
    ];

    foreach ($produtos as $produto) {
        $class = $produto['categoria'];
        echo "<tr class='$class'>
                <td>{$produto['nome']}</td>
                <td>{$produto['preco']}</td>
                <td>{$produto['categoria']}</td>
              </tr>";
    }
    ?>
</table>

</body>
</html>