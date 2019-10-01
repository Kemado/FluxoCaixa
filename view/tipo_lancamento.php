<h1>Cadastro de tipo_lancamentos</h1>
<form name="tipo_lancamentos" id="tipo_lancamentos" method="post" action="../controller/tipo_lancamento_manutencao.php">
	<input type="hidden" name="acao" value="inserir" />

		<label for="descricao">Tipo de Lancamento:</label>
		
			<input type="text" name="descricao" id="descricao" placeholder="Tipo de lancamento"/>
	
		<input type="submit" name="enviar">
</form>