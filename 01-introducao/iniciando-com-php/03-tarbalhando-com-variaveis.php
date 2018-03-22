<?php
//Alterando documento para HTML
header('Content-Type: text/html; charset=utf8');

//Variáveis normais
$meuNome="Hudson Soares";
$minha_empresa="Upinside Treinamentos";

$idadeDoCliente=29;
$idade_do_cliente=29;

echo"Meu nome é {$meuNome} minha empresa é {$minha_empresa} <hr>";

//Variáves de referencia

$var="empresa";
$$var="Upinside";

echo"Minha {$var} é a {$empresa} <hr>";

//Reiscrita de variáveis

$nome="Robson";

echo "{$nome}<hr>";

$nome="marcos";

echo "{$nome}<hr>";

//Concatenação de variáveis

$nome="Robson";
$nome.="Leite";
echo"{$nome}<hr>";

$nome=$meuNome;
echo"{$nome}<hr>";
