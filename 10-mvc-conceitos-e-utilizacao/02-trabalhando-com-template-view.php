<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - MVC Conceito prático de utilização</title>
    </head>
    <body>
        <?php
        require './_app/Config.inc.php';

        $read = new Read;
        $read->ExeRead('ws_categories');
        $tpl = file_get_contents('_mvc\category.tpl.html');

        foreach ($read->getResult() as $cat):
            extract($cat);
             $cat['category_date']= date('d-m-Y' ,strtotime ($cat['category_date']));
             $cat['pub_date'] = date('d-m-Y h:m:i');
           // echo str_replace(array('#category_title#','#category_content#'), array($category_title,$category_content), $tpl);
           $links = explode('&', '#'.implode('#&#', array_keys($cat)).'#');
          
           echo str_replace($links,$cat,$tpl);

        endforeach;
        ?>


    </body>
</html>