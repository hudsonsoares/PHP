<?php

class AcessoProtegidoFilha extends AcessoProtegido{
    
    protected $CPF;
    
    public function __construct($Nome,$Email){
        parent:: __construct($Nome, $Email);
    }
    
    public function addCPF($Nome, $CPF){
        parent::setNome($Nome);
        $this->CPF = $CPF;
    }
    
   

}
