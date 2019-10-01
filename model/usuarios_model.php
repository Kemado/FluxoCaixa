	<?php

	require_once "conexao.php";

	Class UsuarioModel extends Conexao_DAO {

		public function insert($usuario){
			
			$sql = "INSERT INTO usuarios ( id_usuario, login_usuario, senha_usuario, desc_usuario, data_cadastro, data_modificacao, ativo) VALUES ( :id_usuario, :login_usuario, :senha_usuario, :desc_usuario, :data_cadastro, :data_modificacao, :ativo)";
			$stmt = Conexao_DAO::Prepare($sql);
			$id = Conexao_DAO::LastId() + 1;
			$stmt->bindParam(':id_usuario', $id);
			$stmt->bindParam(':login_usuario', $usuario->login_usuario);
			$stmt->bindParam(':senha_usuario', $usuario->senha_usuario);
			$stmt->bindParam(':desc_usuario', $usuario->desc_usuario);
			$stmt->bindParam(':data_cadastro', $usuario->data_cadastro);
			$stmt->bindParam(':data_modificacao', $usuario->data_cadastro);
			$stmt->bindParam(':ativo', $usuario->ativo);
			return $stmt->execute();

		}

		public function update($usuario){
			$sql = "UPDATE usuarios SET login_usuario = :login_usuario, senha_usuario = :senha_usuario, desc_usuario = :desc_usuario, data_modificacao = :data_modificacao, ativo = :ativo WHERE id_usuario = :id_usuario";
			$stmt = Conexao_DAO::Prepare($sql);
			$stmt->bindParam(':id_usuario', $usuario->id_usuario);
			$stmt->bindParam(':login_usuario', $usuario->login_usuario);
			$stmt->bindParam(':senha_usuario', $usuario->senha_usuario);
			$stmt->bindParam(':desc_usuario', $usuario->desc_usuario);
			$stmt->bindParam(':data_modificacao', $usuario->data_modificacao);
			$stmt->bindParam(':ativo', $usuario->ativo);
			return $stmt->execute();

		}

		public function buscar($id_usuario) {
			$sql = "SELECT * FROM usuarios WHERE id_usuario = :id_usuario";
			$stmt = Conexao_DAO::Prepare($sql);
			$stmt->bindParam(':id_usuario', $id_usuario);
			$stmt->execute();
			return $stmt->fetch();
		}

		public function excluir($id_usuario){
			$sql = "DELETE FROM usuarios WHERE id_usuario = :id_usuario";
			$stmt = Conexao_DAO::Prepare($sql);
			$stmt->bindParam(':id_usuario', $id_usuario);
			return $stmt->execute();
		}


		
 } 	