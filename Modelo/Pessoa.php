<?php
class Pessoa {
    public $nome;
    public $sexo;
    public $dataNascimento;
    
    public function setNome($nome) {
        $this -> nome = $nome;
    }

    public function setSexo($sexo) {
        $this -> sexo = $sexo;
    }

    public function setDataNascimento($dataNascimento) {
        $this -> dataNascimento = $dataNascimento;
    }
}

?>