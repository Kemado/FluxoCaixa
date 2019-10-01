<?php 

require_once "../model/clientes_model.php";
require_once "../controller/clientes.php";

$cliente = new Cliente();
$auxmodelcliente = new ClienteModel();

if(isset($_POST['acao']) && $_POST['acao'] == 'inserir')
{
	$data_cadastro = date("Y-m-d");


	$cliente->setIDCliente(0);
	$cliente->setDescCliente($_POST['descricao']);
	$cliente->setEmailCliente($_POST['email']);
	$cliente->setDataCadastro($data_cadastro);
	$cliente->setDataModificacao($data_cadastro);
	$cliente->setAtivo(1);//Já cadastra como um cliente em atividade
	$auxmodelcliente->insert($cliente);

}else if(isset($_POST['acao']) && $_POST['acao'] == 'atualizar'){
	$data_modificacao = date("Y-m-d");

	$cliente->setIDCliente($_POST['id_cliente']);
	$cliente->setDescCliente($_POST['descricao']);
	$cliente->setEmailCliente($_POST['email']);
	//$cliente->setDataCadastro($data_cadastro);
	$cliente->setDataModificacao($data_modificacao);
	$cliente->setAtivo($_POST['ativo']);//Já cadastra como um cliente em atividade
	$auxmodelcliente->update($cliente);
}else if(isset($_POST['acao']) && $_POST['acao'] == 'excluir'){
	//Pode mesma logica para desativar cliente um botão onde ativa e desativa clientes
	$auxmodelcliente->excluir($_POST['id_cliente']);
}else if(isset($_POST['acao']) && $_POST['acao'] == 'buscar'){
	var_dump( $auxmodelcliente->buscar($_POST['id_cliente']));
}


?>