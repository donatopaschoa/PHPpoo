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
        require_once 'Venda.php';

        echo "<p><h2>Cliente 1: Pagou via cartão de crédito mas se arrependeu e fêz o cancelamento:</h2></p>";
        $v1 = new venda;
        $v1->cartCredito = true;
        $v1->dinheiro = false;
        $v1->realizar();
        $v1->cancelar();

        echo "<p><h2>Cliente 2: Pagou em dinheiro mas se arrependeu e fêz o cancelamento:</h2></p>";
        $v2 = new venda;
        $v2->cartCredito = false;
        $v2->dinheiro = true;
        $v2->realizar();
        $v2->cancelar();

    ?>
</body>
</html>