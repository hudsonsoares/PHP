<?php
//Alterando documento para HTML
header('Content-Type: text/html; charset=utf8');

//Atribuição
$a = 5;
$a+=5;
$a-=5;
$a *=5;
$a/=5;
var_dump($a);
echo"<hr>";

//Aritimetico
$a=5;
$b=4;
$c= $a+$b;
$c=($a+$b)/$a;
$c=5+5*2;
$c=(5+5)*2;

var_dump($c);
echo"<hr>";

//Relacionais

$a=5;
$b=5;
//var_dump($a,$b);
//if($a===$b):
//    echo"TRUE";
//else:
//    echo"FALSE";
//    endif;
//    echo"<hr>";
if ($a == $b): endif; //Se igual
if ($a === $b): endif; //Se identico mesmo valor e mesmo tipo
if ($a != $b): endif; //Se diferente
if ($a !== $b): endif; //Se não identico
if ($a > $b): endif; //Se maior
if ($a >= $b): endif; //Se maior e igual
if ($a < $b): endif; //Se menor

//Existencia
if ($a): endif; //Se exite
if (!$a): endif; //Se não exite
if (isset($a)): endif; //Se exite
if (!isset($a)): endif; //Se não exite
if (empty($a)): endif; //Se não exite ou estiver vazio
if (!empty($a)): endif; //Se exite e tem valor

//LÓGICOS
$l="";
$s="UpInside";

if($s=="Upinside"||(empty($l) && $s=="UpInside+")):
    echo"TRUE";
else:
    echo"FALSE";
endif;


  