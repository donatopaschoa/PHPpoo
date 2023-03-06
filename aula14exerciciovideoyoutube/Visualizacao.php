<?php
    /* Esta classe "Visualizacao.php" irá agregar as 2 outras classes:
       - classe Video.php       >> controle de qtde de views, nota de avaliação e curtidas de um titulo
       - classe Gafanhoto.php   >> controle de acesso do avaliador via login e a qtde total assistida (totAssistido)
       
       A classe Visualizacao tem 2 atributos:
       - filme                       >> irá receber o "objeto Video"
       - espectador                  >> ira receber o "objeto Gafanhoto"

       O atributo "filme" será o canal de navegação para atribuir e ler valores dos atributos do "objeto Vídeo"
       O atributo "espectador" será o canal de navegação p/ atribuir e ler valores dos atributos do "objeto Gafanhoto"

       Desta forma, o "objeto Visualizacao", além de fazer o controle, irá conter todos os valores necessários para gerar futura base de dados de todos os vídeos assistidos assim como avaliação de cada um deles com a qtde de views, curtidas e o login de quem acessou
    */
    require_once "Video.php";
    require_once "Gafanhoto.php";

    class Visualizacao{

        // Atributos:
        private $filme;
        private $espectador;

        // Métodos especiais:------------------
        public function __construct($espectador, $filme)
        {
            $this->espectador = $espectador; // recebendo obj Gafanhoto
            $this->filme = $filme; // recebendo o obj Video

            // Qdo o usuário se logar e assistir um vídeo, será adicionado os contadores de visualização de
            // um det vídeo assistido e a a totalização de todos os vídeos assistidos:
            $this->filme->setViews($this->filme->getViews() + 1); // classe Video
            $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1); // classe Gafanhoto
        }

        function getFilme(){
            return $this->filme;
        }

        function getEspectador(){
            return $this->espectador;
        }

        function setFilme($filme){
            $this->filme = $filme;
        }

        function setEspectador($espectador){
            $this->espectador = $espectador;
        }

        // Métodos específicos: ----------------
        function avaliar(){
            $this->filme->setAvaliacao(5);
        }

        function avaliarNota($nota){
            $this->filme->setAvaliacao($nota);
        }

        function avaliarPorcentagem($porcentagem){ 
            $nota = 0;
            if($porcentagem <= 20){
                $nota = 3;
            }elseif($porcentagem <= 50){
                $nota = 5;
            }elseif($porcentagem <= 90){
                $nota = 8;
            }else{
                $nota = 10;
            }
            $this->filme->setAvaliacao($nota);
        }
    }



?>