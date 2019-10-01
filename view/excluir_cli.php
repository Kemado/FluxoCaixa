<h1>Cadastro de Clientes</h1>
<form name="clientes" id="clientes" method="post" action="../controller/cliente_manutencao.php">
	<input type="hidden" name="acao" value="excluir" />
		
		<label for="id">ID:</label>
		
		<input type="text" name="id_cliente" id="id_cliente" placeholder="id"/>
	
		<input type="submit" name="enviar">
</form>