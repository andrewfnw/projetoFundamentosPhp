<?php

	class LivroEscolar extends Livro {
		
		protected $disciplina;
		
		public function __construct($nome, $autor, $edicao, $editora, $genero="Didatico", int $quantidade, float $preco, $disciplina="Geral"){
			parent::__construct($nome, $autor, $edicao, $editora, $genero, $quantidade, $preco);
			$this->disciplina = $disciplina;
		}
		
		public function getDisciplina(){
			return $this->disciplina;
		}
		
		public function setDisciplina($disciplina){
			$this->disciplina = $disciplina;
		}
		
	}

?>