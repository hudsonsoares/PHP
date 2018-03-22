<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Tipos de validação</title>
    </head>
    <body>
        <h3> Tratamento por existência</h3>
        <hr>
        <?php
        $string = 12;


        if (is_string($string)):
            echo "String é uma string";
        elseif (!is_string($string)):
            echo "String não e uma string";

        endif;
        echo"<hr>";


        if (!empty($string)):
            echo "Existe e tem valor";
        elseif (isset($string)):
            echo "String existe e não tem valor";
        endif;
        echo "<hr><hr>"
        ?>

        <h3> Tomada de decissão:</h3>
        <hr>
        <?php
        $email = 'contatoo@gmail.com';

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
            echo"E-mail não é  valido";
        elseif ($email == 'contato@gmail.com'):
            die("E-mail de uso restrito");
        else:
            echo "e-mail valido";
        endif;
        echo" (:";
        ?>

        <h3> Retorno de Flags:</h3>
        <hr>
        <?php

        function Idade($Idade = null) {
            if (!$Idade):
                return false;
            elseif (!is_int($Idade)):
                return false;
            endif;
            return "O seu ano de nascimento é : ". (date('Y')- $Idade);
        }

        $idade = 36;
        if (Idade($idade)):
            echo Idade($idade);
        else:
            echo "informe um int idade";
        endif;
        ?>
        
        <h3> Compração:</h3>
        <hr>
        <?php
        $num1 = 10;
        $num2 = 10;
        if($num1 == $num2):
            echo "São iguais mas não do mesmo tipo";
        elseif($num1 === $num2):
            echo "São iguais e do mesmo tipo";
        endif;
        
        ?>

    </body>
</html>
