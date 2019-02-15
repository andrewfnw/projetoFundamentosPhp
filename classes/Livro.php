<?php

	class Livro {
		
		protected $nome;
		protected $autor;
		protected $edicao;
		protected $editora;
		protected $genero;
		protected $quantidade;
		protected $preco;
		
		public function __construct($nome, $autor, $edicao, $editora, $genero, int $quantidade, float $preco){
			$this->nome = $nome;
			$this->autor = $autor;
			$this->edicao = $edicao;
			$this->editora = $editora;
			$this->genero = $genero;
			$this->quantidade = $quantidade;
			$this->preco = $preco;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function setNome($nome){
			$this->nome = $nome;
		}
		
		public function getAutor(){
			return $this->autor;
		}
		
		public function setAutor($autor){
			$this->autor = $autor;
		}
		
		public function getEdicao(){
			return $this->edicao;
		}
		
		public function setEdicao($edicao){
			$this->edicao = $edicao;
		}
		
		public function getEditora(){
			return $this->editora;
		}
		
		public function setEditora($editora){
			$this->editora = $editora;
		}
		
		public function getGenero(){
			return $this->genero;
		}
		
		public function setGenero($genero){
			$this->genero = $genero;
		}
		
		public function getQuantidade(){
			return $this->quantidade;
		}
		
		public function setQuantidade($quantidade){
			$this->quantidade = $quantidade;
		}
		
		public function getPreco(){
			return $this->preco;
		}
		
		public function setPreco(float $preco){
			$this->preco = $preco;
		}
		
	}

?>