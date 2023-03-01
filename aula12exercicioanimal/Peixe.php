<?php
    require_once "Animal.php";
    class Peixe extends Animal{ 
        // Atributos:
        private $corEscama;

        // Métodos herdados - Animal
        function alimentar()
        {
            echo "<p>Comendo substâncias da água</p>";
        }

        function locomover()
        {
            echo "<p>Nadando</p>";
        }

        function emitirSom()
        {
            echo "<p>Peixe não faz som</p>";
        }

        // Métodos específicos:
        public function soltarBolhas(){
            echo "<p>Soltando uma bolha</p>";
        }

        // Método especial:
        function getCorEscama(){
            return $this->corEscama;
        }

        function setCorEscama($cor){
            $this->corEscama = $cor;
        }
    }
?>