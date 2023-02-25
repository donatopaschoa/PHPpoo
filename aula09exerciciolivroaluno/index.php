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
                require_once "Livro.php";
                $pessoa = array(); // Vetor de objetos Pessoas
                $pessoa[0] = new Pessoa("João Souza", 25, "masculino");
                $pessoa[1] = new Pessoa("Amélia Barbosa", 32, "feminino");

                $livro = []; // Vetor de objetos, João leu 2 livros e Amélia, 1 livro:
                $livro[0] = new Livro("A Cabana", "William P. Young", 200, $pessoa[0]);
                $livro[1] = new Livro("Éramos 6", "Maria José Dupré", 100, $pessoa[0]);
                $livro[2] = new Livro("Cidade do sol", "Khaled Hosseini", 300, $pessoa[1]);

                $livro[1]->abrir();
                //$livro[1]->fechar();
                $livro[1]->detalhes();
                $livro[1]->folhear(99);
                $livro[1]->avancarPag();
                $livro[1]->detalhes();
                $livro[1]->voltarPag();
                $livro[1]->detalhes();
                $livro[2]->detalhes();
            ?>
        </div>
    </pre>
</body>
</html>