<?php
class Login {
	private $nomeUsuario;
	private $senha;
	private $email;

	public function setNomeUsuario($nomeUsuario) {
        $this -> nomeUsuario = $nomeUsuario;
	}

	public function getNomeUsuario() {
		return $this -> nomeUsuario;
	}

	public function setSenha($senha) {
        $this -> senha = $senha;
	}

	public function getSenha() {
		return $this -> senha;
	}

	public function setEmail($email) {
        $this -> email = $email;
	}

	public function getEmail() {
		return $this -> email;
	}

	public function Cadastrar($nomeUsuario, $senha, $email) {
		$this -> nomeUsuario = $nomeUsuario;
		$this -> senha = $senha;
		$this -> email = $email;
	}

	public function RealizarLogin(){
	
	}
}
?>