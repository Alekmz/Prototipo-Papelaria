<?php
class Produto {
	private $nome;
	private $codigo;
	private $peso;
	private $valorUnitario;
	private $tipo;
	private $marca;

	public function setNome($nome) {
        $this -> nome = $nome;
	}

	public function getNome() {
		return $this -> nome;
	}

	public function setCodigo($codigo) {
        $this -> codigo = $codigo;
	}

	public function getCodigo() {
		return $this -> codigo;
	}

	public function setPeso($peso) {
        $this -> peso = $peso;
	}

	public function getPeso() {
		return $this -> peso;
	}

	public function setValorUnitario($valorUnitario) {
        $this -> valorUnitario = $valorUnitario;
	}

	public function getValorUnitario() {
		return $this -> valorUnitario;
	}

	public function setTipo($tipo) {
        $this -> tipo = $tipo;
	}

	public function getTipo() {
		return $this -> tipo;
	}

	public function setMarca($marca) {
        $this -> marca = $marca;
	}

	public function getMarca() {
		return $this -> marca;
	}

	public function BuscarProduto(){
		return $nome.'-'.$codigo.'-'.$peso.'-'.$valorUnitario.'-'.$tipo.'-'.$marca;
	}

	public function Visualizar(){
		return $nome.'-'.$codigo.'-'.$peso.'-'.$valorUnitario.'-'.$tipo.'-'.$marca;
	}
}
?>