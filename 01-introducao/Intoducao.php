<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (phpversion() >= 5.4):
            echo "Versão do PHP " . phpversion() . " - Olá podemos programas";
        else:
            echo "Versão do PHP " . phpversion() . "A vesão do PHP precisa ser atualizada";
        endif;
        echo"<hr>";
        //echo phpinfo();
//        echo "<pre>";
//        print_r(ini_get_all());
//        echo "</pre>";
        echo ini_get('date.timezone');
        echo "<br>";
        echo "Antes de alterar o timezone";
        echo "<br>";
        echo date('d/m/Y H:i:s');
        echo"<br>";
        date_default_timezone_set("UTC");
        echo "<br>";
        echo date_default_timezone_get();
        echo "<br>";
        echo "Depois que alterou o timezone";
        echo "<br>";
        echo date('d/m/Y H:i:s');
        ?>
    </body>
</html>
