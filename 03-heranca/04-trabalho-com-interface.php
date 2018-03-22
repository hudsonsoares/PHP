<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require('./interface/IAluno.php');
        require('./inc/Config.inc.php');
        
        $aluno = new TrabalhoComInterfaces('Hudson', 'PHP pro');
        $aluno->Matricula('Java');
        $aluno->Formar();
        $aluno->Matricula('PHP');
        $aluno->Formar();
        
        var_dump($aluno);
        ?>
    </body>
</html>
