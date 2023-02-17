<?php
    require_once "Controlador.php";

    // Será feita a "ligação" entre esta classe "ControleRemoto"
    // com a interface "Controlador", ou seja, a classe 
    // "ControleRemoto" vai implementar a interface "Controlador"
    // Os mét. abstratos da interface tornaram em mét. específicos

    class ControleRemoto implements Controlador {

        // Atributos: ------------------------------------------------------------
        private $volume;
        private $ligado;
        private $tocando;

        // Métodos especiais: -----------------------------------------------------
       
        public function __construct()
        {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        private function getVolume(){
            return $this->volume;
        }

        private function getLigado(){
            return $this->ligado;
        }

        private function getTocando(){
            return $this->tocando;
        }

        private function setVoluma($volume){
            $this->volume = $volume;
        }

        private function setLigado($ligado){
            $this->ligado = $ligado;
        }

        private function setTocando($tocando){
            $this->tocando = $tocando;
        }

        // Métodos específicos (implementados da interface "Controlador"): -----

        public function ligar(){
            $this->setLigado(true);
        }

        public function desligar(){
            $this->setLigado(false);
        }

        public function abrirMenu(){
            echo "------------- Menu ---------------------<br>";
            echo "<br> Está ligado: " . (($this->getLigado())? "SIM" : "NÃO");
            echo "<br> Está tocando: " . (($this->getTocando())? "SIM" : "NÃO");
            echo "<br> Volume: " . $this->getVolume() ." ";
            for($i=0; $i<=$this->getVolume(); $i +=10){
                echo "|";
            }
            echo "<br>";
        }

        public function fecharMenu(){
            echo "Fechando menu...";
        }
        public function maisVolume(){
            if($this->getLigado()){
                $this->setVoluma($this->getVolume() + 10);
            }else{
                echo "<p>Dispositivo DESLIGADO, não pode AUMENTAR o Volume</p>";
            }
        }

        public function menosVolume(){
            if($this->getLigado()){
                $this->setVoluma($this->getVolume() - 10);
            } else {
                echo "<p>Dispositivo DESLIGADO, não pode DIMINUIR o Volume</p>";
            }
        }
        public function ligarMudo(){
            if($this->getLigado() && $this->getVolume() > 0){
                $this->setVoluma(0);
            }

        }

        public function desligarMudo(){
            if($this->getLigado() && $this->getVolume() == 0){
                $this->setVoluma(50);
            }
        }

        public function play(){
            if($this->getLigado() && !($this->getTocando()))
                $this->setTocando(true);
        }

        public function pause(){
            if($this->getLigado() && $this->getTocando())
                $this->setTocando(false);
        }
    }
?>