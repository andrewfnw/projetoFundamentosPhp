<?php

	class Conexao {
		
		public static $conn;
		
		public function __construct(){
			$this->abreConexao();
		}
		
		public function getConexao() {
			return static::$conn;
		}
		
		public static function abreConexao() {
			static::$conn = new PDO('mysql:host=localhost;dbname=livraria', 'root', '');
		}
		
		public static function fechaConexao() {
			static::$conn = null;
		}
		
	}

?>