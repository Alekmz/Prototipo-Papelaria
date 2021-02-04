<?php
class Pedido {
	private $codigo;
	private $dataPedido;
	private $situacao;
	private $precoTotal;

	public function setCodigo($codigo) {
        $this -> codigo = $codigo;
	}

	public function getCodigo() {
		return $this -> codigo;
	}

	public function setDataPedido($dataPedido) {
        $this -> dataPedido = $dataPedido;
	}

	public function getDataPedido() {
		return $this -> dataPedido;
	}

	public function setSituacao($situacao) {
        $this -> situacao = $situacao;
	}

	public function getSituacao() {
		return $this -> situacao;
	}

	public function setPrecoTotal($precoTotal) {
        $this -> precoTotal = $precoTotal;
	}

	public function getPrecoTotal() {
		return $this -> precoTotal;
	}

	public function Visualizar(){
		return $codigo.'-'.$dataPedido.'-'.$situacao.'-'.$precoTotal;
	}

	public function Reservar(){

	}
}
?>