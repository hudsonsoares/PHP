<?php

class AbstarcaoCC extends Abstracao {

    public $Limite;

    public function __construct($Cliente, $Saldo, $Limite) {
        parent:: __construct($Cliente, $Saldo);
        $this->limite = $Limite;
        $this->Conta = 'Conta Corrente';
        $this->Saldo += $this->Limite;
    }

    public function Sacar($Valor) {
        if ($this->Saldo < $Valor):
            echo "O seu saque de {$this->Real($Valor)} não pode ser efetuado por falta de Saldo!!!<hr>";
        else:
            parent:: Sacar($Valor);
        endif;
    }

    public function Depositar($Valor) {
        parent:: Depositar($Valor);
    }

    public function Extrato() {
        parent:: Extrato();
    }

    public function Transferir($Valor, $Destino) {
        parent::Transferir($Valor, $Destino);
    }

}
