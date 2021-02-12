<?php
class Contato {
	private $nome;
	private $tipoContato;
	private $codigo;
	private $objetivoContato;
	private $telefone;
	private $email;
	private $mensagem;

	public function setNome($nome) {
        $this -> nome = $nome;
	}

	public function getNome() {
		return $this -> nome;
	}

	public function setMensagem($mensagem) {
        $this -> mensagem = $mensagem;
	}

	public function getMensagem() {
		return $this -> mensagem;
	}

	public function setTipoContato($tipoContato) {
        $this -> tipoContato = $tipoContato;
	}

	public function getTipoContato() {
		return $this -> tipoContato;
	}

	public function setCodigo($codigo) {
        $this -> codigo = $codigo;
	}

	public function getCodigo() {
		return $this -> codigo;
	}

	public function setObjetivoContato($objetivoContato) {
        $this -> objetivoContato = $objetivoContato;
	}

	public function getObjetivoContato() {
		return $this -> objetivoContato;
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

	public function VisualizarEmail(){
		return $email;
	}

	public function VisualizarNumeroTelefone(){
		return $telefone;
	}
	public function Cadastrar() {
		try{
			$sql = mysqli_connect("localhost", 'root', '');
		}catch(PDOException $e){
			 echo $e-> getMessage();
		}
		mysqli_select_db($sql, "cadastros");
		$command = "insert into contato (nome, email, telefone, mensagem) values ('".$this->getNome()."','".$this->getEmail()."','".$this->getTelefone()."','".$this->getMensagem()."')";
		mysqli_query($sql,$command);
	}
}
?>