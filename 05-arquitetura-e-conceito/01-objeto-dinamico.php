<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Objeto Dinâmico</title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');
        
        $cliente = new ObjetoDinamico;
        
        $hudson = new stdClass();
        $hudson->Nome = 'Hudson';
        $hudson->Email = 'hudonsoares.eng@gmail.com';
        
        $cliente->Novo($hudson);
        
        $marcos = clone($hudson);
        $marcos->Nome = "Marcos";
        $marcos->Email = 'banana';
        
        
        var_dump($cliente, $hudson, $marcos);
        
        ?>
    </body>
</html>
