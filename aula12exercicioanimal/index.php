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
                require_once "Animal.php";
                require_once "Ave.php";
                require_once "Arara.php";
                require_once "Mamifero.php";
                require_once "Peixe.php";
                require_once "Reptil.php";
                require_once "Cachorro.php";
                require_once "Cobra.php";
                require_once "Canguru.php";
                require_once "Tartaruga.php";
                require_once "Goldfish.php";
                
                //$n = new Animal(); // Erro, não pode instanciar uma classe abstrata
                $m = new Mamifero();
                $r = new Reptil();
                $p = new Peixe();
                $a = new Ave();
                //print_r($a);

                $c = new Canguru();
                $k = new Cachorro();
                $t = new Tartaruga();

                $m->locomover();
                $c->locomover();
                $k->locomover();
                $t->locomover();

                $m->emitirSom();
                $c->emitirSom();
                $k->emitirSom();

                $c->locomover();
                $c->usarBolsa();
            ?>
        </div>
    </pre>
</body>
</html>