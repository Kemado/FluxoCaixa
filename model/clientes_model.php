	<?php

	require_once "conexao.php";

	Class ClienteModel extends Conexao_DAO {

		public function insert($cliente){
			
			$sql = "INSERT INTO clientes ( desc_cliente, email_cliente, data_cadastro, data_modificacao, ativo) VALUES ( :desc_cliente, :email_cliente, :data_cadastro, :data_modificacao, :ativo)";
			$stmt = Conexao_DAO::Prepare($sql);
			$stmt->bindParam(':desc_cliente', $cliente->desc_cliente);
			$stmt->bindParam(':email_cliente', $cliente->email_cliente);
			$stmt->bindParam(':data_cadastro', $cliente->data_cadastro);
			$stmt->bindParam(':data_modificacao', $cliente->data_cadastro);
			$stmt->bindParam(':ativo', $cliente->ativo);
			return $stmt->execute();

		}

		public function update($cliente){
			$sql = "UPDATE clientes SET desc_cliente = :desc_cliente, email_cliente = :email_cliente, data_modificacao = :data_modificacao, ativo = :ativo WHERE id_cliente = :id_cliente";

			$stmt = Conexao_DAO::Prepare($sql);
			$stmt->bindParam(':id_cliente', $cliente->id_cliente);
			$stmt->bindParam(':desc_cliente', $cliente->desc_cliente);
			$stmt->bindParam(':email_cliente', $cliente->email_cliente);
			$stmt->bindParam(':data_modificacao', $cliente->data_modificacao);
			$stmt->bindParam(':ativo', $cliente->ativo);
			return $stmt->execute();

		}

		public function buscar($id_cliente) {
			$sql = "SELECT * FROM clientes WHERE id_cliente = :id_cliente";
			$stmt = Conexao_DAO::Prepare($sql);
			$stmt->bindParam(':id_cliente', $id_cliente);
			$stmt->execute();
			return $stmt->fetch();
		}

		public function excluir($id_cliente){
			$sql = "DELETE FROM clientes WHERE id_cliente = :id_cliente";
			$stmt = Conexao_DAO::Prepare($sql);
			$stmt->bindParam(':id_cliente', $id_cliente);
			return $stmt->execute();
		}


		
 } 	