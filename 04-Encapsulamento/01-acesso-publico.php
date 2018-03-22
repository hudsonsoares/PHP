<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Acesso Publico</title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');  
        
        $hudson = new AcessoPublico('Hudson', 'hudsonsoares.eng@gmail.com');
        $hudson->Nome = 'Marcos';
        $hudson->Email = 'marcos@email.com';
        
        $hudson->Email = 'banana';
        
        var_dump($hudson);
        
        ?>
    </body>
</html>
