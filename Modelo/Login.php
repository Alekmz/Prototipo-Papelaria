<?php
class Login
{
	private $nomeUsuario;
	private $senha;
	private $email;

	public function setNomeUsuario($nomeUsuario)
	{
		$this->nomeUsuario = $nomeUsuario;
	}

	public function getNomeUsuario()
	{
		return $this->nomeUsuario;
	}

	public function setSenha($senha)
	{
		$this->senha = $senha;
	}

	public function getSenha()
	{
		return $this->senha;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function Cadastrar()
	{
		try {
			$sql = mysqli_connect("localhost", 'root', '');
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		mysqli_select_db($sql, "cadastros");
		$command = "insert into cadastro (nome, senha, email) values ('" . $this->getNomeUsuario() . "','" . $this->getSenha() . "','" . $this->getEmail() . "')";
		mysqli_query($sql, $command);
	}

	public function RealizarLogin()
	{
	}
}
