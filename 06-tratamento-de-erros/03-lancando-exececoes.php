<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $eu ='';
        
        if(!$eu):
            $erro = new Exception("A variavel não pode ser vazio",E_USER_ERROR );
        endif;
        
        echo $erro->getMessage();
        
        try{
             if(!$eu):
            throw new Exception("Vazio não", E_USER_ERROR);
        endif;
            
        } catch (Exception $e){
            echo"<p style = 'color:red'>Código do erro {$e->getCode()} Erro na linha # {$e->getLine()} : {$e->getMessage()}<br>";
            echo "<small>{$e->getFile()}</small></p>";
        }
        ?>
    </body>
</html>
