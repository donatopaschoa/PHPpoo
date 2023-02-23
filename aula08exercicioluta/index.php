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
                require_once 'Lutador.php';
                require_once 'Luta.php';

                echo "<p><h2>Luta:</h2></p>";

                // OBS: Os métodos acessores "get" foram alterados para público na classe Lutador.php
                //      pois na aula08 do prof. não teve erro ao acessar o nome e outros atributos que
                //      estavam declarados como privados 

                // Cada objeto Lutador será armazenado num vetor
                $L = []; // ou $L = array();
                $L[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
                $L[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
                $L[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.8, 12, 2, 1);
                $L[3] = new Lutador("Dead Code", "Austália", 28, 1.93, 81.6, 13, 0, 2);
                $L[4] = new Lutador("Ufocobol", "Brasil", 37, 1.77, 119.3, 5, 4, 3);
                $L[5] = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);

                $UEC01 = new Luta();
                $UEC01->marcarLuta($L[0], $L[1]);
                $UEC01->lutar();                        // Fez a apresentação dos 2 lutadores ANTES da luta
                $UEC01->getDesafiado()->status();       // Fez a apresentação do desafiado DEPOIS da luta
                $UEC01->getDesafiante()->status();      // Fez a apresentação do desafiante DEPOIS da luta

            ?>
        </div>
    </pre>
</body>
</html>