<?php	

	class Conexao
	{
	

		public static function pegarConexao()
		{
			try {

				$conexao = new PDO(DB_DRIVE . ':host=' . DB_HOSTNAME . ';dbname=' . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
				$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conexao;

			} catch (PDOException $e) {
				die ("Erro ao tentar conexao com o banco de dados: ".$e->getMessage());
			}
		}

		public static function fecharConexao()
		{

			try {
				unset($conexao);
			} catch (PDOException $e) {
				die ("Erro ao tentar fechar a conexao com o banco de dados: ".$e->getMessage());
			}
				
		}

		public static function debugPDO($raw_sql, $parameters)
		{

			$keys = array();
			$values = $parameters;

			foreach ($parameters as $key => $value) {

				if (is_string($key)) {
						$keys[] = '/' . $key . '/';
				} else {
						$keys[] = '/[?]/';
				}

				if (is_string($value)) {
						$values[$key] = "'" . $value . "'";
				} elseif (is_array($value)) {
						$values[$key] = implode(',', $value);
				} elseif (is_null($value)) {
						$values[$key] = 'NULL';
				}
			}

			echo "<br> [DEBUG] Keys:<pre>";
			print_r($keys);

			echo "\n[DEBUG] Values: ";
			print_r($values);
			echo "</pre>";

			$raw_sql = preg_replace($keys, $values, $raw_sql, 1, $count);

			return $raw_sql;
	}	

}
    
