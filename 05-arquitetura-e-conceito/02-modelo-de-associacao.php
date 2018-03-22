<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Modelo de Associação</title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');

        $hudson = new AssociacaoCliente("Hudson R. Soares", 'hudsonsoares.eng@gmail.com');

//        $hudson = new stdClass();
//        $hudson->Nome = 'Robson';
//        $hudson->Email = 'contato';
        
        $login = new AssociaoLogin($hudson);

        if ($login->getLogin()):
            echo "Gerenciando o cliente id: {$login->getCliente()->getCliente()}<br>";
            echo "{$login->getCliente()->getNome()} logou com sucesso usando o e-mail {$login->getCliente()->getEmail()}<hr>";
        else:
            echo 'Erro ao logar!';
        endif;

        var_dump($hudson, $login);
        ?>
    </body>
</html>
