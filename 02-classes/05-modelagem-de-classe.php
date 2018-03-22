<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Modelagem de Classe</title>
    </head>
    <body>
        <?php
        require('./class/ModelagemDeClasse.class.php');
        
        $hudson = new ModelagemDeClasse('Hudson', 27, 'Programador', 1200);
        $hudson->setProfissao('Web Master');
        
        $hudson->Trabalhar('um portal', 12000);        
        
        var_dump($hudson);
        
        ?>
    </body>
</html>