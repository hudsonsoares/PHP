<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Modelo de Agregação</title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');
        
        $hudson = new ComposicaoUsuario('Hudson R. Soares', 'hudsonsoares.eng@gmail.com');
        $hudson->CadastrarEndereco('Soledade', 'RS');
        
        echo "O email de {$hudson->Nome} é {$hudson->Email}<br>";
        echo "{$hudson->Nome} mora em {$hudson->getEndereco()->getCidade()}/{$hudson->getEndereco()->getEstado()}";
        
        var_dump($hudson);
        
        ?>
    </body>
</html>
