<?php

class ModelagemClasse {

    public $Nome;
    public $Idade;
    public $Profissao;
    public $ContaSalario;

    public function __construct($Nome, $Idade, $Profissao, $ContaSalario) {
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Profissao = $Profissao;
        $this->ContaSalario = $ContaSalario;
    }

    public function setNome($Nome) {

        $this->Nome = $Nome;
    }

    public function setIdade($Idade) {
        $this->Idade = $Idade;
    }

    public function setProfissao($Profissao) {
        $this->Profissao = $Profissao;
    }

    public function ToTrabalhar($Trabalho, $Valor) {
        $this->ContaSalario += $Valor;
        $this->toEcho("O funcionário {$this->Nome} executou o serviço de {$Trabalho} e vai receber por isso {$this->toReal($Valor)}");
    }

    public function toEcho($mensagem) {
        echo "{$mensagem}";
    }
    
    public function toReal($Valor){
        return number_format($Valor,"2",",",".");
    }

}
