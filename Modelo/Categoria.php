<?php
class Categoria {
	private $nome;
	private $marca;
	private $condicaoProduto;
	private $faixaPreco;

	public function setNome($nome) {
        $this -> nome = $nome;
	}

	public function getNome() {
		return $this -> nome;
	}

	public function setMarca($marca) {
        $this -> marca = $marca;
	}

	public function getMarca() {
		return $this -> marca;
	}

	public function setCondicaoProduto($condicaoProduto) {
        $this -> condicaoProduto = $condicaoProduto;
	}

	public function getCondicaoProduto() {
		return $this -> condicaoProduto;
	}

	public function setFaixaPreco($faixaPreco) {
        $this -> faixaPreco = $faixaPreco;
	}

	public function getFaixaPreco() {
		return $this -> faixaPreco;
	}

	public function VisualizarCategorias(){
		return $nome.'-'.$marca.'-'.$condicaoProduto.'-'.$faixaPreco;
	}

	public function Cadastrar($nome, $marca, $condicaoProduto, $faixaPreco) {
		$this -> nome = $nome;
		$this -> marca = $marca;
		$this -> condicaoProduto = $condicaoProduto;
		$this -> faixaPreco = $faixaPreco;
	}
}
?>