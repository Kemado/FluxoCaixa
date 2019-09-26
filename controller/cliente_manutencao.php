<?php 

require_once "../model/clientes_model.php";
require_once "../controller/clientes.php";

$cliente = new Cliente();
$auxmodelcliente = new ClienteModel();

if(isset($_POST['acao']) && $_POST['acao'] == 'inserir')
{
	$data_cadastro = date("Y-m-d");

	//var_dump($_POST);

	$cliente->setIDCliente(0);
	$cliente->setDescCliente($_POST['descricao']);
	$cliente->setEmailCliente($_POST['email']);
	$cliente->setDataCadastro($data_cadastro);
	$cliente->setDataModificacao($data_cadastro);
	$cliente->setAtivo(1);//Já cadastra como um cliente em atividade
	var_dump($cliente);
	$auxmodelcliente->insert($cliente);

}
	
?>