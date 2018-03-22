<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Acesso Privado</title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');

        $hudson = new AcessoPrivado('Hudson', 'hudsonsoares.eng@gmail.com', 89787634598);
//        $hudson->

        var_dump($hudson);
        
        ?>
    </body>
</html>
