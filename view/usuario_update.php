<h1>Usuarios</h1>
<form name="usuario" id="usuario" method="post" action="../controller/usuario_manutencao.php">
	<input type="hidden" name="acao" value="atualizar" />
		
		<label for="id_usuario">ID:</label>
		
		<input type="text" name="id_usuario" id="id_usuario" placeholder="id"/>


		<label for="login">login:</label>
		
			<input type="text" name="login" id="login" placeholder="Usuario login"/>

		<label for="senha">senha:</label>
		
			<input type="text" name="senha" id="senha" placeholder="Senha"/>
			

		<label for="descricao">Nome:</label>
		
			<input type="text" name="descricao" id="descricao" placeholder="Usuario nome"/>

		<label for="status">Status:</label>
		
			<input type="text" name="ativo" id="ativo" placeholder="Ativo?"/>	
	
	
		<input type="submit" name="enviar">
</form>