<?php

	require_once "classes/Conexao.php";
	require_once "classes/Livro.php";
	require_once "classes/LivroEscolar.php";

	class Livraria {
		
		private static $conexao;
		
		public function __construct(){
			static::$conexao = new Conexao();
		}
		
		public function adicionaLivroBD(Livro $livro) {
            static::$conexao->abreConexao();
			$sqlInserir = "INSERT INTO livros(nome, autor, edicao, editora, genero, quantidade, preco) values(" .
			"'" . $livro->getNome() . "'" . ", " . "'" . $livro->getAutor() . "'" . ", " . "'" . $livro->getEdicao() . "'"
			. ", " . "'" . $livro->getEditora() . "'" . ", " . "'" .
			$livro->getGenero() . "'" . ", " .  $livro->getQuantidade() . ", " . $livro->getPreco() .")";
			static::$conexao->getConexao()->exec($sqlInserir);
            static::$conexao->fechaConexao();
		}
		
		public function removeLivroBD($nome) {
            static::$conexao->abreConexao();
			$sqlSubQuery = "SELECT id FROM livros WHERE
			nome =" . "'" . $nome . "'";
			$ids = static::$conexao->getConexao()->query($sqlSubQuery);
			if ($ids){
			    foreach ($ids as $row){
                    $sqlDelete = "DELETE FROM livros where id in (" . $row['id'] . ")";
                    static::$conexao->getConexao()->exec($sqlDelete);
                }
            }
            static::$conexao->fechaConexao();
		}

		public function listarLivros() {
            static::$conexao->abreConexao();
			$queryLivros = static::$conexao->getConexao()->query("SELECT * FROM livros");
			if ($queryLivros){
			    foreach ($queryLivros as $row){
			        echo "<b>Id:</b> " . $row['id'] . " <b>Nome do Livro:</b> " . $row['nome'] .
                        " <b>Autor:</b> " . $row['autor'] . " <b>Preco:</b> " . $row['preco'] . "<br>";
                }
            }
            static::$conexao->fechaConexao();
		}

	}

?>