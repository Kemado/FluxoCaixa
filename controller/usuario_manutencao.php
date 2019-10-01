<?php 

require_once "../model/usuarios_model.php";
require_once "../controller/usuarios.php";

$usuario = new Usuario();
$auxmodelusuario = new UsuarioModel();

if(isset($_POST['acao']) && $_POST['acao'] == 'inserir')
{
	$data_cadastro = date("Y-m-d");

	$usuario->setLoginUsuario($_POST['login']);
	$usuario->setSenhaUsuario($_POST['senha']);
	$usuario->setDescUsuario($_POST['descricao']);
	$usuario->setDataCadastro($data_cadastro);
	$usuario->setDataModificacao($data_cadastro);
	$usuario->setAtivo(1);//Já cadastra como um usuario em atividade
	$auxmodelusuario->insert($usuario);

}else if(isset($_POST['acao']) && $_POST['acao'] == 'atualizar'){
	$data_modificacao = date("Y-m-d");

	$usuario->setIDUsuario($_POST['id_usuario']);
	$usuario->setLoginUsuario($_POST['login']);
	$usuario->setSenhaUsuario($_POST['senha']);
	$usuario->setDescUsuario($_POST['descricao']);
	$usuario->setDataModificacao($data_modificacao);
	$usuario->setAtivo($_POST['ativo']);
	$auxmodelusuario->update($usuario);
}else if(isset($_POST['acao']) && $_POST['acao'] == 'excluir'){
	$auxmodelusuario->excluir($_POST['id_usuario']);
}else if(isset($_POST['acao']) && $_POST['acao'] == 'buscar'){
	var_dump( $auxmodelusuario->buscar($_POST['id_usuario']));
}


?>