<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP Interação de objetos</title>
    </head>
    <body>
        <?php
        require('./class/InteracaoClasse.class.php');
        require('./class/InteracaoObjeto.class.php');

        $robson = new InteracaoClasse('Robson Leite', 36, 'programado', 1200);
        $hudson = new InteracaoClasse('Hudson Soares', 40, 'Tecnico', 800);

        $upinside = new InteracaoObjeto('UpInside');
        $upinside->Contratar($robson, 'Web Design', 2000);
        $upinside->Pagar();
        $upinside->Promover('Analista de Sistemas', 1000);
        // $upinside->Demitir( 2000);

        $upinside->Contratar($hudson, 'teste', 500);
        $upinside->Pagar();
        $upinside->Promover('Analista',5000);
        $upinside->Pagar();
        //$upinside->Demitir( 2000);

        var_dump($robson, $hudson, $upinside);
        ?>
    </body>
</html>
