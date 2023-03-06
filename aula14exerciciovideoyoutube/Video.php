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
            // A avaliação deve ser ponderada de acordo com a qtde de 
            // views do vídeo assistido, portanto:
            $media = ($this->avaliacao + $avaliacao) / $this->views;
            $this->avaliacao = $media;
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