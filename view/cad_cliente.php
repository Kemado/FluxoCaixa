<h1>Cadastro de Clientes</h1>
<form name="clientes" id="clientes" method="post" action="../controller/cliente_manutencao.php">
	<input type="hidden" name="acao" value="inserir" />
		
		<label for="descricao">Cliente:</label>
		
			<input type="text" name="descricao" id="descricao" placeholder="Nome do Cliente"/>
		
		<label for="email">Email</label>
		
			<input type="text" name="email" id="email" placeholder="Email"/>		
	
		<input type="submit" name="enviar">
</form>