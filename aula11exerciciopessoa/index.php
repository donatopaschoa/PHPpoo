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
                require_once "Pessoa.php";
                require_once "Aluno.php";
                require_once "Bolsista.php";
                require_once "Visitante.php";
                require_once "Professor.php";
                require_once "Tecnico.php";

                // p1 = new Pessoa; >> Gera ERRO pois classe abstrata não permite criar objetos

                $v1 = new Visitante();
                $v1->setNome("João");
                $v1->setIdade(26);
                $v1->setSexo("M");
                $v1->fazerAniv();
                print_r($v1);

                $a1 = new Aluno();
                $a1->setMatricula(1111);
                $a1->setNome("Pedro");
                $a1->setIdade(16);
                $a1->setSexo("M");
                $a1->setCurso("Informática");
                $a1->pagarMensalidade();
                print_r($a1);

                $b1 = new Bolsista();
                $b1->setNome("Jubileu");
                $b1->setBolsa(12.5);
                $b1->setCurso("Administração");
                $b1->setIdade(17);
                $b1->setMatricula(1112);
                $b1->setSexo("M");
                $b1->pagarMensalidade();
                print_r($b1);

                $p1 = new Professor();
                $p1->receberAument(1000);
                $p1->setNome("Carlos");
                $p1->setIdade(62);
                $p1->setSexo("M");
                $p1->setEspecialidade("Matemática");
                $p1->fazerAniv();
                print_r($p1);

                $t1 = new Tecnico();
                
                $t1->setNome("José");
                $t1->setSexo("M");
                $t1->setIdade(19);
                $t1->setMatricula(117);
                $t1->setCurso("Culinária");
                //$t1->pagarMensalidade();
                $t1->praticar();
                $t1->setRegistroProfissional(true);
                
                print_r($t1);

            ?>
        </div>
    </pre>
</body>
</html>