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
        <div> <h1>Vídeo:</h1>
            <?php
                require_once "Pessoa.php";
                require_once "AcoesVideo.php";
                require_once "Video.php";
                require_once "Gafanhoto.php";
                require_once "Visualizacao.php";

                // Cadastrando filmes: -------------
                $v[0] = new Video("Aula 1 de POO");
                $v[1] = new Video("Aula 12 de PHP");
                $v[2] = new Video("Aula 15 de HTML5");
                //$v->like();
                //$v->play();

                // Cadastrando usuários: ------------
                $g[0] = new Gafanhoto("José", 26, "M", "R106385-5");
                $g[1] = new Gafanhoto("Maria", 20, "F", "R106396-9");
                $g[2] = new Gafanhoto("Ana", 30, "F", "R106396-8");
                $g[3] = new Gafanhoto("Rui", 30, "M", "R106389-8");

                // Relacionando (agregando) um usuário para cada vídeo assistido:
                //$vis[0] = new Visualizacao($g[0], $v[2]); // José assistiu o víd. "Aula 15 de HTML"
                //$vis[1] = new Visualizacao($g[0], $v[1]); // José assistiu o víd. "Aula 12 de PHP"

                //$vis[0]->avaliar(); // José avaliou c/ nota 5 o vídeo "Aula 15 de HTML" (1 + 5)/1 = 6

                //$vis[1]->avaliarPorcentagem(85); // José avaliou c/ nota 8 o vídeo "Aula 12 de PHP"
                                                 // = (1 + 8)/1 = 9
                // Testes: -----------------
                $vis[0] = new Visualizacao($g[0], $v[2]); // José assistiu o víd. "Aula 15 de HTML"
                $vis[0]->avaliar(); // José avaliou c/ nota 5 o vídeo "Aula 15 de HTML" 

                $vis[1] = new Visualizacao($g[1], $v[2]); // Maria assistiu o víd. "Aula 15 de HTML"
                $vis[1]->avaliar(); // Maria avaliou c/ nota 5 o vídeo "Aula 15 de HTML" 
                
                $vis[2] = new Visualizacao($g[2], $v[2]); // Ana assistiu o víd. "Aula 15 de HTML"
                $vis[2]->avaliar(); // Ana avaliou c/ nota 5 o vídeo "Aula 15 de HTML"                 

                $vis[3] = new Visualizacao($g[3], $v[2]); // Rui assistiu o víd. "Aula 15 de HTML"
                $vis[3]->avaliar(); // Rui avaliou c/ nota 5 o vídeo "Aula 15 de HTML"                 
                
                print_r($vis);
            ?>
        </div>
    </pre>
</body>
</html>