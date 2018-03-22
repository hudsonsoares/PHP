<?php

//Alterando documento para HTML
header('Content-Type: text/html; charset=utf8');

//Exitem 2 tipos de array, ralecional e associativo.
//ASSOCIATIVO

$arry = array('PHP', 'HTML', 'JS');
var_dump($arry);
echo"<br>";
$arry[] = 'css';
$arry[2] = 'substituição';
var_dump($arry);
echo "<hr>";

//RELACIONAL
$arr = array('nome' => 'Hudson',
    'profissao' => 'Analisa de Sistema  <?=',
    'idade' => 36,
    'salario'=>2500
);
$arr['cidade']='Itaperuna';
$arr['idade']=30;
$arr[]='RJ';
//ELEMINA TAGS NO ARRAY QUE POSSAM VIR PELA URL 
$arr = array_map('strip_tags',$arr);
//ELEMINA ESPAÇO NO ARRAY QUE POSSAM VIR PELA URL 
$arr = array_map('trim', $arr);

var_dump($arr);
echo"<br>";
extract($arr);
echo"O meu nome é: {$nome} tenho {$idade} anos e sou {$profissao}e ganho ". number_format($salario,2,",",".")." <br>";
echo "<br>";
foreach($arr as $long){
    
    echo $long;
}
echo"<hr>";

$colaboradores[]=['nome'=>'Hudson','cargo'=>'Analista de sistema <?=','salario'=>'7.800'];
$colaboradores[]=['nome'=>'Ricahrd','cargo'=>'Aprendiz','salario'=>'2.800'];
$colaboradores[]=['nome'=>'Paulo','cargo'=>'Tecnido de suporte','salario'=>'5.800'];

$colaboradores[0] = array_map('strip_tags',$colaboradores[0]);
$colaboradores[0] = array_map('trim',$colaboradores[0]);
var_dump($colaboradores);
echo"<br>";

foreach($colaboradores as $pessoal){
    extract($pessoal);
    echo"Funcionário: {$nome},  Cargo: {$cargo},  Sálario: {$salario}<br>";
}









