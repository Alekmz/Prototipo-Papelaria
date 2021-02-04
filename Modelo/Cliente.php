<?php
include("Pessoa.php");

class Cliente extends Pessoa {
	private $RG;

	public function setRg($rg) {
        $this -> rg = $rg;
	}

	public function getRg() {
		return $this -> rg;
	}

	public function getNome() {
		return $this -> nome;
	}

	public function getSexo() {
		return $this -> sexo;
	}

	public function getDataNascimento() {
		return $this -> dataNascimento;
	}
	
	public function ReservarPedidos(){

	}

	public function VisualizarConta(){
		return $nome.'-'.$sexo.'-'.$dataNascimento.'-'.$RG;
	}
}
?>