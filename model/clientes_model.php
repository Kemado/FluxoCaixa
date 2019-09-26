	<?php

	require_once "conexao.php";

	Class ClienteModel extends Conexao_DAO {

		public function insert($cliente){

		

			
			$sql = "INSERT INTO clientes ( id_cliente, desc_cliente, email_cliente, data_cadastro, data_modificacao, ativo) VALUES ( :id_cliente, :desc_cliente, :email_cliente, :data_cadastro, :data_modificacao, :ativo)";
			$stmt = Conexao_DAO::Prepare($sql);
			$id = Conexao_DAO::LastId() + 1;
			$stmt->bindParam(':id_cliente', $id);
			$stmt->bindParam(':desc_cliente', $cliente->desc_cliente);
			$stmt->bindParam(':email_cliente', $cliente->email_cliente);
			$stmt->bindParam(':data_cadastro', $cliente->data_cadastro);
			$stmt->bindParam(':data_modificacao', $cliente->data_cadastro);
			$stmt->bindParam(':ativo', $cliente->ativo);
			return $stmt->execute();

		}
		
 } 	