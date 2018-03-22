<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - MVC Conceito prático de utilização</title>
    </head>
    <body>
        <?php
        //CONTROLLER
        require './_app/Config.inc.php';
        //MODEL
        $read = new Read;
        $read->ExeRead('ws_categories');
        foreach ($read->getResult() as $cat):
            extract($cat);
            //VIEW
            echo ""
            . "<article>"
            . "<h1>{$category_title}</h1>"
            . "<p>{$category_content}</p>"
            . "</article> <hr>";
            //END VIEW

        endforeach;//END MODEL
        //END CONTROLLER
        ?>
        
    </body>
</html>
