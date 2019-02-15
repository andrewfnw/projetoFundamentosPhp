<?php

	require_once "classes/Conexao.php";
	require_once "classes/Livro.php";
	require_once "classes/LivroEscolar.php";
	require_once "classes/Livraria.php";
	
	$operacaoLivraria = $_POST["operacaoLivraria"];
	
	$livraria = new Livraria();
	
	if($operacaoLivraria == "Cadastrar novo livro"){
		$nome = $_POST["nome"];
		$autor = $_POST["autor"];
		$edicao = $_POST["edicao"];
		$editora = $_POST["editora"];
		$genero = $_POST["genero"];
		$quantidade = $_POST["quantidade"];
		$preco = $_POST["preco"];
		$tipoLivro = $_POST["tipoLivro"];
		$disciplina = $_POST["disciplina"];
		if($tipoLivro == ""){
			$livro = new LivroEscolar($nome, $autor, $edicao, $editora, $genero, $quantidade, $preco, $disciplina);
			$livraria->adicionaLivroBD($livro);
		} else{
			$livro = new Livro($nome, $autor, $edicao, $editora, $genero, $quantidade, $preco);
			$livraria->adicionaLivroBD($livro);
		}
		echo "Livro adicionado com sucesso";
	} else if ($operacaoLivraria == "Remover livro"){
		$nomeLivroRemover = $_POST["nomeLivroRemover"];
		$livraria->removeLivroBD($nomeLivroRemover);
		echo "Livro removido com sucesso";
	} else if ($operacaoLivraria == "Listar Livros"){
		echo ($livraria->listarLivros());
	}

?>