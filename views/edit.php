<h3>Editar</h3>

<!--formulário para edição de pedido-->
<form method="POST">

    Nota Fiscal:<br/>
    <input type="number" name="nf" value="<?php echo $info['nf']; ?>"/><br/><br/>

    Produto:<br/>
    <input type="text" name="produto" value="<?php echo $info['produto']; ?>" /><br/><br/>

    Preço:<br/>
    R$ <input type="text" name="preco" value="<?php echo number_format($info['preco'],2,",","") ?>" /><br/><br/>

    <input type="submit" value="Salvar" />

</form>