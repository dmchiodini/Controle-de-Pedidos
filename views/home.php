<a class="add" href="<?php echo BASE_URL; ?>pedidos/add">Adicionar</a>

<table border="1" width="800">
    <tr>
        <th>ID</th>
        <th>NOTA FISCAL</th>
        <th>PRODUTO</th>
        <th>VALOR</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach ($lista as $pedido): ?>
        <tr>
            <td><?php echo $pedido['id']; ?></td>
            <td><?php echo $pedido['nf'] ?></td>
            <td><?php echo $pedido['produto'] ?></td>
            <td>R$ <?php echo number_format($pedido['preco'],2,",",".") ?></td>
            <td>
                <a class="edit" href="<?php echo BASE_URL; ?>pedidos/edit/<?php echo $pedido['id']; ?>">Editar</a>
                <a class="del" href="<?php echo BASE_URL; ?>pedidos/delete/<?php echo $pedido['id']; ?>">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>