<h1> Editar Automóveis </h1>

<form method="post" action="/update">
<input type="hidden" name="id_up" value="<?=$dados['codigo']?>">    
<label> Marca: </label><br>
<input type="text" name="marca_input" value="<?=$dados['marca']?>"><br>
<label> Modelo: </label><br>
<input type="text" name="modelo_input"value="<?=$dados['modelo']?>"><br>
<label> Ano: </label><br>
<input type="number" name="ano_input" value="<?=$dados['ano']?>"><br>
<label> Km: </label><br>
<input type="number" name="km_input" value="<?=$dados['km']?>"><br>
<label> Preço: </label><br>
<input type="number" name="preco_input" value="<?=$dados['preco']?>"><br>
<button type="submit"> Enviar </button>

</form>