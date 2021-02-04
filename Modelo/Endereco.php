<?php
class Endereco {
	private $cidade;
	private $estado;
	private $bairro;
    private $rua;
    private $numero;

	public function setCidade($cidade) {
        $this -> cidade = $cidade;
	}

	public function getCidade() {
		return $this -> cidade;
	}

	public function setEstado($estado) {
        $this -> estado = $estado;
	}

	public function getEstado() {
		return $this -> estado;
	}

	public function setBairro($bairro) {
        $this -> bairro = $bairro;
	}

	public function getBairro() {
		return $this -> bairro;
	}

	public function setRua($rua) {
        $this -> rua = $rua;
	}

	public function getRua() {
		return $this -> rua;
	}

	public function setNumero($numero) {
        $this -> numero = $numero;
	}

	public function getNumero() {
		return $this -> numero;
	}

	public function VerificarEndereco() {
		return $cidade.'-'.$estado.'-'.$bairro.'-'.$rua.'-'.$numero;
	}

	public function Cadastrar($cidade, $estado, $bairro, $rua, $numero) {
		$this -> cidade = $cidade;
		$this -> estado = $estado;
		$this -> bairro = $bairro;
		$this -> rua = $rua;
		$this -> numero = $numero;
	}
}
?>