<?php
class Fornecedor {
	private $CNPJ;
	private $nome;
	private $produto;
	private $telefone;

	public function setCNPJ($CNPJ) {
        $this -> CNPJ = $CNPJ;
	}

	public function getCNPJ() {
		return $this -> CNPJ;
	}

	public function setNome($nome) {
        $this -> nome = $nome;
	}

	public function getNome() {
		return $this -> nome;
	}

	public function setProduto($produto) {
        $this -> produto = $produto;
	}

	public function getProduto() {
		return $this -> produto;
	}

	public function setTelefone($telefone) {
        $this -> telefone = $telefone;
	}

	public function getTelefone() {
		return $this -> telefone;
	}

	public function ContatarFornecedor(){
		return $telefone;
	}

	public function Visualizar(){
		return $CNPJ.'-'.$nome.'-'.$produto.'-'.$telefone;
	}
}
?>