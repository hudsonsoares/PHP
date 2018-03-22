<?php

class PolimorfismoDebito extends Polimorfismo {

    public $Desconto;

    public function __construct($Valor, $Produto) {
        parent:: __construct($Valor, $Produto);
        $this->Desconto = 15;
        $this->Metodo = 'Débito';
    }
    
    public function setDesconto($Valor){
        $this->Desconto = $Valor;
    }
    
    public function Pagar(){
        $this->Valor = (($this->Valor / 100)*100 - $this->Desconto);
        parent::Pagar();
        
    }
    
    

}
