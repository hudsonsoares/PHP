<?php

class HeancaJuridica extends Heranca {

    public $Empresa;
    public $Funcionarios;
    

    public function __construct($Nome, $Idade, $Empresa) {
        parent::__construct($Nome, $Idade);
        $this->Empresa = $Empresa;
    }

    public function Contratar($Pessoa) {
        echo "A empresa {$this->Empresa} de {$this->Nome} contratou {$Pessoa}<hr>";
        $this->Funcionarios += 1;
    }
    
    public function verEmpresa(){
        echo " A Empresa {$this->Empresa} foi fundada por {$this->Nome}<br> <small style='color:#09f'>";
        parent::VerPessoa();
        echo "</small>";
        
    }

}
