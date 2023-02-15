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
        <?php
            require_once "ContaBanco.php";

            $ju = new ContaBanco();
            $cr = new ContaBanco();

            // Dados dos correntistas:
            //Jubileu:
            $ju->setDono("Jubileu");
            $ju->setNumConta(1);
            // Creuza:
            $cr->setDono("Creuza");
            $cr->setNumConta(2);

            // Movimentações:
            $ju->abrirConta("cc");
            $cr->abrirConta("cp");
            $ju->depositar(200);
            $ju->sacar(380);
            $ju->sacar($ju->getSaldo());
            $ju->pagarMensal();
            $ju->depositar(36); 
            $ju->fecharConta();

            /*
            $ju->sacar($ju->getSaldo());
            $ju->fecharConta();
            */

            //echo "Nome: {$ju->getDono()} <br>";

            print_r($ju);
            print_r($cr);
            
        ?>
    </pre>
</body>
</html>