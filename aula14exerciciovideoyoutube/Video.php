<?php
    require_once "AcoesVideo.php";
    class Video implements AcoesVideo{

        // Atributos:
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        // Métodos implementados da interface AcoesVideo:
        function play(){
            $this->reproduzindo = true;
        }

        function pause(){
            $this->reproduzindo = false;
        }

        function like(){
            $this->curtidas ++;
        }

        // Métodos especiais construtor/get/set
        function __construct($titulo)
        {
            $this->titulo = $titulo;
            $this->avaliacao = 1;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;
        }

        function getTitulo(){
            return $this->titulo;
        }
        
        function getAvaliacao(){
            return $this->avaliacao;
        }

        function getViews(){
            return $this->views;
        }

        function getCurtidas(){
            return $this->curtidas;
        }

        function getReproduzindo(){
            return $this->reproduzindo;
        }

        function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        function setAvaliacao($avaliacao){
            // A avaliação deve ser de acordo com a qtde de 
            // views do vídeo assistido, portanto:
            if($this->views > 2){
                $total = ($this->avaliacao * ($this->views -1)); // Total de avaliação antes de uma nova visualização
                $media = ($total + $avaliacao) / $this->views; // Média linear igualitária
                $this->avaliacao = $media;
            }else{ // Até 2 visualizações, o comportamento é linear:
                $media = ($this->avaliacao + $avaliacao) / $this->views; 
                $this->avaliacao = $media;
            }
        }

        function setViews($views){
            $this->views = $views;
        }

        function setCurtidas($curtidas){
            $this->curtidas = $curtidas;
        }

        function setReproduzindo($reproduzindo){
            $this->reproduzindo = $reproduzindo;
        }
    }
?>