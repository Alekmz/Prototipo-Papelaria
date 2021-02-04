<?php
class PlanoAssinatura {
	private $codigo;
	private $nome;
	private $mensalidade;
    private $tipo;

	public function setCodigo($codigo) {
        $this -> codigo = $codigo;
	}

	public function getCodigo() {
		return $this -> codigo;
	}

	public function setNome($nome) {
        $this -> nome = $nome;
	}

	public function getNome() {
		return $this -> nome;
	}

	public function setMensalidade($mensalidade) {
        $this -> mensalidade = $mensalidade;
	}

	public function getMensalidade() {
		return $this -> mensalidade;
	}

	public function setTipo($tipo) {
        $this -> tipo = $tipo;
	}

	public function getTipo() {
		return $this -> tipo;
	}

	public function VisualizarAssinaturas(){
		return $codigo.'-'.$nome.'-'.$mensalidade.'-'.$tipo;
	}

	public function ReservarAssinatura(){

	}
}
?>