<h1>Cadastro de Clientes</h1>
<form name="clientes" id="clientes" method="post" action="../controller/cliente_manutencao.php">
	<input type="hidden" name="acao" value="atualizar" />
		
		<label for="id">ID:</label>
		
		<input type="text" name="id_cliente" id="id_cliente" placeholder="id"/>


		<label for="descricao">Cliente:</label>
		
			<input type="text" name="descricao" id="descricao" placeholder="Nome do Cliente"/>
		
		<label for="email">Email</label>
		
			<input type="text" name="email" id="email" placeholder="Email"/>	

		<label for="status">Status:</label>
		
			<input type="text" name="ativo" id="ativo" placeholder="Ativo?"/>	
	
		<input type="submit" name="enviar">
</form>