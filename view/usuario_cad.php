<h1>Cadastro de Usuarios</h1>
<form name="usuarios" id="usuarios" method="post" action="../controller/usuario_manutencao.php">
	<input type="hidden" name="acao" value="inserir" />

		<label for="login">usuario:</label>
			<input type="text" name="login" id="login" placeholder="Login do usuario"/>

		<label for="senha">senha:</label>
			<input type="text" name="senha" id="senha" placeholder="Senha"/>

		<label for="descricao">Nome:</label>
			<input type="text" name="descricao" id="descricao" placeholder="Nome do usuario"/>
			
	
		<input type="submit" name="enviar">
</form>