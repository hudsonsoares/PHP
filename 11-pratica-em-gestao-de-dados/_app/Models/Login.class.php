<?php

/**
 * Login.class [ MODELS ]
 * Responsável por autenticar, verificar e checar autenticação de usuários do sistema de login
 * @copyright (c) year, Hudson Soares - Elite Informatica
 */
class Login {

    private $Level;
    private $Email;
    private $Senha;
    private $Result;
    private $Error;

    public function __construct($Level) {
        $this->Level = $Level;
    }

    public function ExeLogin(array $UserData) {
        $this->Email = strip_tags(trim((string) $UserData['user']));
        $this->Senha = strip_tags(trim((string) $UserData['pass']));
        $this->setLogin();
    }

    public function getResult() {
        return $this->Result;
    }

    public function getError() {
        return $this->Error;
    }

    public function CheckLogin() {
        if (empty($_SESSION['userlogin'])|| $_SESSION['userlogin']['user_level']< $this->Level ):
            unset($_SESSION['userlogin']);
            return false;
        else:
            return true;


        endif;
    }

    ########## MÉTODOS PRIVADOS ##########

    private function setLogin() {

        if (!$this->Email || !$this->Senha):
            $this->Error = ["Informe seu e-mail e senha para efetuar login!", WS_INFOR];
            $this->Result = false;
        elseif (!$this->getUser()):
            $this->Error = ["Dados informados não conferem, tente novamente!", WS_ALERT];
            $this->Result = false;
        elseif ($this->Result['user_level'] < $this->Level):
            $this->Error = ["Desculpe {$this->Result['user_name']}, você não tem permissão para acessar esta aréa.", WS_ERROR];
            $this->Result = false;
        else:
            $this->Excecute();
        endif;
    }

    private function getUser() {
        $this->Senha = md5($this->Senha);
        $read = new Read;
        $read->ExeRead("ws_users", "WHERE user_email = :e AND user_password = :p", "e={$this->Email}& p={$this->Senha}");
        if ($read->getResult()):
            $this->Result = $read->getResult()[0];
            return true;
        else:
            return false;
        endif;
    }

    private function Excecute() {
        if (!session_id()):
            session_start();

        endif;

        $_SESSION['userlogin'] = $this->Result;
        $this->Error = ["Olá! {$this->Result['user_name']} seja bem vindo, aguarde o redirecinamento..."];
        $this->Result = true;
    }

}
