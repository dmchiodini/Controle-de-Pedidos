<!--formulário para edição de pedido-->

<form method="POST">
    <fieldset>
        <legend>Editar</legend>
        <label>Nota Fiscal:</label><br/>
        <input type="number" name="nf" value="<?php echo $info['nf']; ?>" /><br/><br/>

        <label>Produto:</label><br/>
        <input type="text" name="produto" value="<?php echo $info['produto']; ?>"  /><br/><br/>

        <label>Preço:</label><br/>
        <label class="valor">R$</label><input class="preco" type="text" name="preco" value="<?php echo number_format($info['preco'],2,",","") ?>"  /><br/><br/>

        <input class="botao" type="submit" value="Salvar" />
    </fieldset>
</form>