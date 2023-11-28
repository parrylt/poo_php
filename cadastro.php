<html>
    <title>Dados do Alunos </title>
    <meta charset="utf-8">
    <body>
        <?php
        include_once 'AlunoDTO.php';

        $aluno = new AlunoDTO;

        $aluno -> setNome ($_POST['nome']);
        $aluno -> setEmail ($_POST['email']);

        $aluno -> mostrarDados();
        ?>
    </body>
</html>