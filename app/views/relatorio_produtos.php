<!DOCTYPE html>
<html>
<head>
   <style>
        table{width: 100%; border-collapse: collapse;}
        th, td {border: 1px solid #eee; padding: 8px; text-align:left;}
    </style>
</head>
<body>
    <h1> Relatorio de produtos</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Data de adição</th>
        </tr>
        <?php foreach ($produtos as $produtos) : ?>
            <tr>
                <td><?php echo htmlspecialchars($produto['nome']); ?></td>
                <td><?php echo htmlspecialchars($produto['descricao']); ?></td>
                <td><?php echo number_format($produto['preco'], 2, ',', '.'); ?></td>
                <td><?php echo $produto['quantidade']; ?></td>
                <td><?php echo date('d/m/Y', strtotime($produto['data_adicao'])); ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
    
</body>
</html>