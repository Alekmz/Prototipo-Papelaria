<?php
class Filial {
	private $numero;
	private $nome;
    private $telefone;
    private $email;
    private $CNPJ;

	public function setNumero($numero) {
        $this -> numero = $numero;
	}

	public function getNumero() {
		return $this -> numero;
	}

	public function setNome($nome) {
        $this -> nome = $nome;
	}

	public function getNome() {
		return $this -> nome;
	}

	public function setTelefone($telefone) {
        $this -> telefone = $telefone;
	}

	public function getTelefone() {
		return $this -> telefone;
	}

	public function setEmail($email) {
        $this -> email = $email;
	}

	public function getEmail() {
		return $this -> email;
	}

	public function setCNPJ($CNPJ) {
        $this -> CNPJ = $CNPJ;
	}

	public function getCNPJ() {
		return $this -> CNPJ;
	}

	public function VisualizarFiliais(){
		return $numero.'-'.$nome.'-'.$telefone.'-'.$email.'-'.$CNPJ;
	}

	public function ContatarFilial(){
		return $telefone.'-'.$email;
	}
}
?>