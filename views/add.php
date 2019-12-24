<!--Formulário para adicionar um novo pedido-->

<form method="POST">
    <fieldset>
        <legend>Adicionar Pedido</legend>
        <label>Nota Fiscal:</label><br/>
        <input type="number" name="nf" /><br/><br/>

        <label>Produto:</label><br/>
        <input type="text" name="produto" /><br/><br/>

        <label>Preço:</label><br/>
        <label class="valor">R$</label><input class="preco" type="text" name="preco" /><br/><br/>

        <input class="botao" type="submit" value="Adicionar" />
    </fieldset>
</form>
