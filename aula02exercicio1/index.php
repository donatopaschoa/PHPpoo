<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso básico de POO em PHP</title>
</head>
<body>
    <?php
        require_once 'Carro.php';

        $c1 = new carro;
        $c1->cor = "Azul";
        $c1->velocMax = 120;
        $c1->veloc = 50;
        $c1->acelerar(200);

        $c2 = new carro;
        $c2->cor = "Vermelho";
        $c2->velocMax = 120;
        $c2->parar();
    ?>

</body>
</html>