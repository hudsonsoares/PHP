<?php

//Alterando documento para HTML
header('Content-Type: text/html; charset=utf8');


$pessoa['nome'] = 'hudson ribeiro soares <br> <?=';

//array_pad cria dados dentro do array de acordo com a quantidade informada no parametro
$pessoa = array_pad($pessoa, 5, null);
//array_filter filtra no array todos os array que forem false e vazio os mesmo são eliminados
$pessoa = array_filter($pessoa);
//array_map retorna um array com  função callback executada, 'strip_tags' elemina todas as tags que podem conter no array
$pessoa = array_map('strip_tags', $pessoa);
//array_map retorna um array com  função callback executada, 'trim' elimina os espaços dentro do array
$pessoa = array_map('trim', $pessoa);
//array_push adicionar valores ao final do array
array_push($pessoa, 29);
//remove o ultimo indice do array
array_pop($pessoa);
//adiciona um indice no inicio do array
array_unshift($pessoa, 30);
//remove o primeiro indice do array
array_shift($pessoa);

$pessoa['idade'] = 36;
$pessoa['job'] = 'webmaster';
//inverte o primeiro com o último indice
$pessoa = array_reverse($pessoa);

$empresa['nome empresa'] = 'upinside';
$empresa['ramo'] = 'tecnologia';

$casa['cidade'] = 'itaperuna';
//array_merge pega todos os dados de um array e coloca dentro de um especifico
$pessoa = array_merge($pessoa, $empresa, $casa);
// array_keys pega e coloca em um array todos os indices de um array em especifico
var_dump(array_keys($pessoa));
//Pega os valores de casa indice do array
var_dump(array_values($pessoa));
//pega um indice na possição especificada até a quantidade definida, caso não seja definida a quntidade ele pega do ponto especifico até o final
var_dump(array_slice($pessoa, 3, 2));
echo" O meu array tem o tamanho de " . count($pessoa) . "<br>";
//verifica se o nome que passou existe como valor em algum indice do array
if (in_array("tecnologia", $empresa)):
    echo'Existe!';
else:
    echo"Não existe;";
endif;
echo"<br>";
//Ordena pelo valor 
asort($pessoa);
//Ordem inversa de ordenação pelo valor 
arsort($pessoa);
//Ordena pelo indice
ksort($pessoa);
//Ordem inversa de ordenação pelo indice
krsort($pessoa);

var_dump($pessoa);
echo"<hr>";

$nomes = 'hudson, ribeiro, soares';
//transformei string em array
$nomes = explode(", ", $nomes);
var_dump($nomes);
echo"<br>";
// transformei array em string
$nomes = implode("; ",$nomes);
var_dump($nomes);







