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
                // Cada objeto Lutador será armazenado num vetor
                $L = []; // ou $L = array();
                $L[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
                $L[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
                $L[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.8, 12, 2, 1);
                $L[3] = new Lutador("Dead Code", "Austália", 28, 1.93, 81.6, 13, 0, 2);
                $L[4] = new Lutador("Ufocobol", "Brasil", 37, 1.77, 119.3, 5, 4, 3);
                $L[5] = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);

                $L[0]->apresentar();
                $L[2]->status();
                //$L[3]->getCategoria; // >> Função privada, s/ acesso pelo usuário
                $L[1]->status();
                $L[1]->ganharLuta();
                $L[1]->empatarLuta();
                $L[1]->status();
            ?>
        </div>
    </pre>
</body>
</html>