<?php

class InteracaoObjeto {

    public $Empresa;
    public $Setores;
    /** @var InteracaoClasse */
    public $Funcionario;

    public function __construct($Empresa) {
        $this->Empresa = $Empresa;
        $this->Setores = 0;
    }

    public function Contratar($Funcionario, $Cargo, $Salario) {
        $this->Funcionario = (object) $Funcionario;
        $this->Funcionario->Empresa = $this->Empresa;
        $this->Funcionario->Cargo = $Cargo;
        $this->Funcionario->Salario = $Salario;
        $this->Setores += 1 ;
    }
    
    public function Funcionario($Funcionario){
        $this->Funcionario = $Funcionario;
    }

    public function Pagar() {
        $this->Funcionario->Receber();
    }

    public function Promover($Cargo, $Salario = null) {
        $this->Funcionario->Promover($Cargo);
        if($Salario):
            $this->Funcionario->Salario = $Salario;
        endif;
    }

    public function Demitir($Recisao) {
        $this->Funcionario->Receber($Recisao);
        $this->Funcionario->Empresa = null;
        $this->Funcionario->Salario=null;
        $this->Funcionario = null;
        $this->Setores -= 1;
        
        
    }

}
