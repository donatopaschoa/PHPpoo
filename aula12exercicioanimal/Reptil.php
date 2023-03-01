<?php
    require_once "Animal.php";
    class Reptil extends Animal{
        // Atributos:
        private $corEscama;

        // Métodos herdados - Animal
        function alimentar()
        {
            echo "<p>Comendo vegetais</p>";
        }

        function locomover()
        {
            echo "<p>Rastejando</p>";
        }

        function emitirSom()
        {
            echo "<p>Som de réptil</p>";
        }

        // Métodos especiais:
        function getCorEscama(){
            return $this->corEscama;
        }

        function setCorEscama($cor){
            $this->corEscama = $cor;
        }
    }
?>