<?php
    require_once "Animal.php";
    class Mamifero extends Animal{
        // Atributos:
        private $corPelo;
        
        // Métodos herdados - Animal
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