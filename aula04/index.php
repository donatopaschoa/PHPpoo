<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso básico de POO em PHO</title>
</head>
<body>
    <pre>
        <?php
            require_once "Caneta.php";

            // Construtor 1: será chamado e populado ao instanciar a classe:
            // (os valores são definidos diretamente dentro da classe)
            // $c1 = new caneta(); 
            
            // Construtor 2: será chamado e populado FORA da classe ao instanciá-la:
            // (os atributos são recebidos externamente)
            $c1 = new caneta('BIC', 'Vermelho', 1.0);
            $c2 = new caneta('XXX', 'Preto', .7);

            // Métodos modificadores "set":
                $c1->setModelo("BIC Cristal");
            
            // Métodos acessores "get":
            echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()} <br>" ;

            print_r($c1);
            print_r($c2);
        ?>
    </pre>
</body>
</html>