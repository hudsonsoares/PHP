<?php

class AssociacaoLogin {

    /**
     * 
     *  @var AssociacaoCliente */
    private $Cliente;
    private $Login;

    public function __construct($Cliente) {
        if (is_object($Cliente)):
            $this->Cliente = $Cliente;
            $this->Login = true;
        else:
            die('Erro no objeto');
        endif;
    }
    
    public function getCliente(){
        return $this->Cliente;
    }

}
