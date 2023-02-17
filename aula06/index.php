<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso básico de POO em PHP</title>
</head>
<body>
    <h2>Projeto Controle Remoto:</h2>
    <pre>
        <?php
            require_once 'ControleRemoto.php';
            $c = new ControleRemoto();
            $c->ligar();
            $c->maisVolume();
            $c->abrirMenu();
            

        ?>
    </pre>
</body>
</html>