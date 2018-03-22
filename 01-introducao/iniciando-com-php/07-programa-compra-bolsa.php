<?php

//Alterando documento para HTML
header('Content-Type: text/html; charset=utf8');

$bolsa = "marron";


    if(empty($bolsa)):
        echo " Amor não tem a bolsa";
        elseif ($bolsa == "vermelha") :
            echo "Comprei a bolsa vermelha ";
        elseif($bolsa == "preta"):
            echo "Comprei a bolsa preta";
        else:
            echo " Amor não tem a cor que vc quer pode ser outra cor <br>";
        $amor =true;
        if($amor):
            echo "Sim amor pode ser qualquer cor";
        else:
            echo " Não pode deixar, compro quando chegar outras cores";
           
       endif;     
      
    endif;
