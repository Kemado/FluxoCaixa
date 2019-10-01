	<?php

	require_once "conexao.php";

	Class TipoLancamentoModel extends Conexao_DAO {

		public function insert($tipo_lancamento){
			
			$sql = "INSERT INTO tipo_lancamento ( desc_lancamento, data_cadastro, data_modificacao, ativo) VALUES ( :desc_lancamento, :data_cadastro, :data_modificacao, :ativo)";
			$stmt = Conexao_DAO::Prepare($sql);

			$stmt->bindParam(':desc_lancamento', $tipo_lancamento->desc_tipo_lancamento);
			$stmt->bindParam(':data_cadastro', $tipo_lancamento->data_cadastro);
			$stmt->bindParam(':data_modificacao', $tipo_lancamento->data_cadastro);
			$stmt->bindParam(':ativo', $tipo_lancamento->ativo);

			return $stmt->execute();

		}

		public function update($tipo_lancamento){
			$sql = "UPDATE tipo_lancamento SET desc_lancamento = :desc_lancamento, data_modificacao = :data_modificacao, ativo = :ativo WHERE id_tipo_lancamento = :id_tipo_lancamento";
			$stmt = Conexao_DAO::Prepare($sql);
			$stmt->bindParam(':id_tipo_lancamento', $tipo_lancamento->id_tipo_lancamento);
			$stmt->bindParam(':desc_tipo_lancamento', $tipo_lancamento->desc_tipo_lancamento);
			$stmt->bindParam(':data_modificacao', $tipo_lancamento->data_modificacao);
			$stmt->bindParam(':ativo', $tipo_lancamento->ativo);
			return $stmt->execute();

		}

		public function buscar($id_tipo_lancamento) {
			$sql = "SELECT * FROM tipo_lancamento WHERE id_tipo_lancamento = :id_tipo_lancamento";
			$stmt = Conexao_DAO::Prepare($sql);
			$stmt->bindParam(':id_tipo_lancamento', $id_tipo_lancamento);
			$stmt->execute();
			return $stmt->fetch();
		}

		public function excluir($id_tipo_lancamento){
			$sql = "DELETE FROM tipo_lancamento WHERE id_tipo_lancamento = :id_tipo_lancamento";
			$stmt = Conexao_DAO::Prepare($sql);
			$stmt->bindParam(':id_tipo_lancamento', $id_tipo_lancamento);
			return $stmt->execute();
		}


		
 } 	