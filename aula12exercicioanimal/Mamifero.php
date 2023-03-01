<?php
    require_once "Animal.php";
    class Mamifero extends Animal{
        // Atributos:
        private $corPelo;
        
        // Métodos herdados - Animal
        function alimentar()
        {
            echo "<p>Mamando</p>";
        }

        function locomover()
        {
            echo "<p>Correndo</p>";
        }

        function emitirSom()
        {
            echo "<p>Som de Mamífero</p>";
        }

        // Métodos especiais:
        function getCorPelo(){
            return $this->corPelo;
        }

        function setCorPelo($cor){
            $this->corPelo = $cor;
        }
    }
?>