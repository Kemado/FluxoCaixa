<?php 

require_once "../model/tipo_lancamentos_model.php";
require_once "../controller/tipo_lancamentos.php";

$tipo_lancamento = new TipoLancamento();
$auxmodeltipo_lancamento = new TipoLancamentoModel();

if(isset($_POST['acao']) && $_POST['acao'] == 'inserir')
{
	$data_cadastro = date("Y-m-d");

	$tipo_lancamento->setDescTipoLancamento($_POST['descricao']);
	$tipo_lancamento->setDataCadastro($data_cadastro);
	$tipo_lancamento->setDataModificacao($data_cadastro);
	$tipo_lancamento->setAtivo(1);//Já cadastra como um tipo_lancamento em atividade
	$auxmodeltipo_lancamento->insert($tipo_lancamento);

}else if(isset($_POST['acao']) && $_POST['acao'] == 'atualizar'){
	$data_modificacao = date("Y-m-d");

	$tipo_lancamento->setIdTipoLancamento($_POST['id_tipo_lancamento']);
	$tipo_lancamento->setDescTipoLancamento($_POST['descricao']);
	$tipo_lancamento->setDataModificacao($data_modificacao);
	$tipo_lancamento->setAtivo($_POST['ativo']);
	$auxmodeltipo_lancamento->update($tipo_lancamento);
}else if(isset($_POST['acao']) && $_POST['acao'] == 'excluir'){
	$auxmodeltipo_lancamento->excluir($_POST['id_tipo_lancamento']);
}else if(isset($_POST['acao']) && $_POST['acao'] == 'buscar'){
	var_dump( $auxmodeltipo_lancamento->buscar($_POST['id_tipo_lancamento']));
}


?>