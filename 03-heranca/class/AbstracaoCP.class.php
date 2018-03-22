<?php

class AbstracaoCP extends AbstracaoCC {

    public $Rendimentos;

    public function __construct($Valor, $Cliente) {
        parent:: __construct($Valor, $Cliente);
        $this->Conta = 'Conta Poupança';
        $this->Rendimentos = 10;
    }

    public function Depositar($Valor) {
        $this->Valor = $Valor + ($Valor * ($this->Rendimentos / 100));
        parent:: Depositar($Valor);
    }
    
    public function Sacar($Valor) {
        parent::Sacar($Valor);
    }
    
    public function Transferir($Valor, $Destino) {
                parent::Transferir($Valor, $Destino);
    }
    
    public function Extrato();

}
