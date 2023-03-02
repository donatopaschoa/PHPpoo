<!DOCTYPE html>
<html lang="ept-brn">
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
                require_once "Animal.php";
                require_once "Mamifero.php";
                require_once "Cachorro.php";
                require_once "Lobo.php";

                $m = new Mamifero();
                $l = new Lobo();
                $k = new Cachorro();
                $l->emitirSom();
                $k->emitirSom();
                $k->reagirFrase("Toma comida");
                $k->reagirHora(17, 56);
                $k->reagirHora(11, 56);
                $k->reagirHora(21, 56);
                $k->reagirDono(true);
                $k->reagirDono(false);
                $k->reagirIdadePeso(4, 9);
                $k->reagirIdadePeso(4, 11);
                $k->reagirIdadePeso(6, 9);
                $k->reagirIdadePeso(6, 11);
            ?>
        </div>
    </pre>
</body>
</html>