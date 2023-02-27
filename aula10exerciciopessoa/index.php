<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso básico de POO em PHP</title>
</head>
<body>
    <pre>
        <div>
            <?php
                require_once "Pessoa.php"; // Não precisava pois foi conf. em cada uma das outras classes
                require_once "Aluno.php";
                require_once "Professor.php";
                require_once "Funcionario.php";

                //$p = new Pessoa("Abel", 45, "M");
                $p1 = new Pessoa();
                $p2 = new Aluno();
                $p3 = new Professor();
                $p4 = new Funcionario();

                $p1->setNome("Pedro");
                $p2->setNome("Maria");
                $p3->setNome("Cláudio");
                $p4->setNome("Fabiana");

                $p2->setCurso("Informática");
                $p3->setSalario(2500.75);
                $p4->setSetor("estoque");

                $p1->setSexo("M");
                $p4->setSexo("F");

                $p3->receberAument(550.20); 
                $p4->mudarTrabalho();
                $p2->cancelarMatr();

                print_r($p1);
                print_r($p2);
                print_r($p3);
                print_r($p4);

                //$p1 = new Aluno;

            ?>
        </div>
    </pre>
</body>
</html>