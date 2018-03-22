<?php
//Alterando documento para HTML
header('Content-Type: text/html; charset=utf8');

//Constante

const nome="Hudson";
const empresa="Upinside";
echo nome;
echo"<hr>";
echo"O meu nome é ".nome." e minha empresa se chama".empresa."<hr>";


define('a','Hudson Soares');
echo a;
echo"<hr>";

//A constante é usada para situações que os dados não sofrem alterações como informações de bando de dados
define('db_database','nomeDoBanco');
define('db_user','nomeDousuario');
define('db_password','senhaDoBanco');
define('db_host','locahost');

@$bd= mysqli_connect(db_database,db_user,db_password, db_host);
if($bd):
    echo"Conexão efetuada com sucesso!";
else:
    echo "Erro na conexão com o banco <br>".mysqli_connect_error();
endif;
