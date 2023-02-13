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
            // Importando a classe:
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->modelo = "BIC cristal";
            $c1->cor = "Azul";
            //$c1->ponta = 0.5;
            //$c1->carga = 99;
            //$c1->tampada = true; >> não executa pois gera erro de permissão
            $c1->rabiscar();
            $c1->tampar(); // >> executa pois tampar() é um método público
            print_r($c1);
        ?>
    </pre>
</body>
</html>
