	<?php

	Class Conexao_DAO{

		private static $conexao;

		public static function getConexao()
		{
			$hostname = 'localhost';
			$username = 'root';
			$password = '';
			$nomedb   = 'bd_caixa';
			try{
				self::$conexao = new PDO("mysql:host=$hostname;dbname=$nomedb", $username, $password);
				self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			} catch(PDOException $e){
				echo $e->getMessage();
			}
			return self::$conexao;
		}
		
		public static function Prepare($sql){
			return self::getConexao()->Prepare($sql);
		}

		public static function LastId(){
			return self::getConexao()->LastInsertId();
		}
		
	}

	?>