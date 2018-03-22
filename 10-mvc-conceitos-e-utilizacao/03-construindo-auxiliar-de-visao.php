<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WSPHP MVC - Construindo auxiliar de visão</title>
    </head>
    <body>
        <?php
        require ('./_app/Config.inc.php');
        $session = new Session;

        $read = new Read;
        $read->ExeRead('ws_categories');

        View::Load('./_mvc/category');
        foreach ($read->getResult() as $cat) :
            extract($cat);
            View::Show($cat);
        endforeach;

//        echo "<h1>REQUEST</h1>";
//        foreach ($read->getResult() as $cat) {
//        View::Request('./_mvc/category', $cat);
//        }

        View::Load('./_mvc/nav');
        $read->ExeRead('ws_siteviews_agent');
        foreach ($read->getResult() as $nav):
            extract($nav);
            View::Show($nav);
        endforeach;
        ?>
    </body>
</html>
